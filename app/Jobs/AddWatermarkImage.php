<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class AddWatermarkImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $img = Image::find($this->announcement_image_id);
        if (!$img) {
            return;
        }

        $srcPath = storage_path('app/public/'.$img->path);

        $image = SpatieImage::load($srcPath);

        $watermarkPath = base_path('resources/img/watermark.png');

        $image->watermark($watermarkPath)
                ->watermarkPosition(Manipulations::POSITION_BOTTOM_RIGHT)
                ->watermarkPadding(10, 10)
                ->watermarkWidth(100, Manipulations::UNIT_PIXELS)
                ->watermarkHeight(100, Manipulations::UNIT_PIXELS)
                ->watermarkFit(Manipulations::FIT_CONTAIN)
                ->watermarkOpacity(70);

        $image->save($srcPath);
    }
}