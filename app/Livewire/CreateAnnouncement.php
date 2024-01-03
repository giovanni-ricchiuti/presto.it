<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Image\Image;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Jobs\AddWatermarkImage;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    
    #[Rule('required', message: 'Il campo titolo è obbligatorio')]
    public $title;

    #[Rule('required', message: 'Il campo categoria è obbligatorio')]
    public $category;

    #[Rule('required', message: 'Il campo corpo è obbligatorio')]
    public $description;

    #[Rule('required', message: 'Il campo prezzo è obbligatorio')]
    public $price;

    public $temporary_images;

    public $images = [];

    public $image;

    public function store()
    {
        $validationRules = [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
    
        if (!empty($this->images) || !empty($this->temporary_images)) {
            $validationRules['images'] = 'array|min:1';
        }
    
        $this->validate($validationRules);
    
        $category = Category::find($this->category);
    
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        
    
        if (!empty($this->images)) {
            foreach ($this->images as $image) {

                $newfileName = "announcement/{$announcement->id}";
                $newImage = $announcement->images()->create(['path' => $image->store($newfileName, 'public')]);


              //  AddWatermarkImage::dispatch($announcement, $newImage);

                AddWatermarkImage::dispatch($newImage->id);

                RemoveFaces::withChain([
                    
                    new ResizeImage($newImage->path, 400, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)

                ])->dispatch($newImage->id); 
                

            }

            File::deleteDirectory(storage_path('/app/Livewire-tmp'));
        }

        Auth::user()->announcements()->save($announcement);
    
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->images = [];
    
        session()->flash('success', 'Annuncio inserito con successo, sarà inserito subito dopo la revisione!');
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }

    public function updatedTemporaryImages () {
        if ($this->validate([
            'temporary_images.*' => 'image|max:5000',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage ($key) {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }


}
