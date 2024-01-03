<div class="container-fluid pt-5 pb-5">
    <div class="container card-ombra-registrati-login card-announc col-lg-8 col-12 mx-auto">
        <div class="card-header d-flex justify-content-center text-center">
            <h1 class="mb-4">{{__('ui.creaAnnuncio')}}</h1>
        </div>

        <x-success />
        <div class="card-body">
            <form wire:submit.prevent="store">
                @csrf
                <div class="row g-3">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="col-12 d-flex">
                        <label for="title" class="text-center justify-content-center p-2 label-login">{{__('ui.titolo')}}</label>
                        <input wire:model.live="title" type="text"
                            class="form-control rounded-0 @error('title') border-danger @enderror" id="title"
                            placeholder="Titolo Annuncio" value="{{ old('title') }}" required maxlength="150" />
                    </div>

                    @error('category')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="rcol-12 d-flex">
                        <label for="category" class="text-center justify-content-center p-2 label-login"
                            data-te-select-label-ref>{{__('ui.category')}}</label>
                        <select wire:model.defer="category"
                            class="form-control rounded-0 @error('category') border-danger @enderror" id="category"
                            required>
                            <option value="" selected class="text-gray-600 placeholder:text-gray-400">{{__('ui.scegliCategoria')}}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="rcol-12 d-flex">
                        <label for="description"
                            class="text-center justify-content-center p-2 label-login">{{__('ui.descrizione')}}</label>
                        <textarea wire:model.live="description" class="form-control rounded-0 @error('description') border-danger @enderror"
                            type="text" id="description" placeholder="Descrizione" value="{{ old('description') }}" required
                            maxlength="10000"></textarea>
                    </div>

                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="rcol-12 d-flex">
                        <label for="price" class="text-center justify-content-center p-2 label-login">{{__('ui.prezzo')}}</label>
                        <input wire:model.live="price" type="number" step=".01"
                            class="form-control rounded-0 @error('price') border-danger @enderror" id="price"
                            placeholder="Prezzo" value="{{ old('price') }}" required maxlength="8"
                            pattern="^\d+(\.\d+)?(,\d+)?$" />
                    </div>

                    {{--preview Immagini--}}
                    @error('images')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="rcol-12 d-flex">
                        <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid  @enderror" placeholder="Img" />
                    </div>

                    
                    @if (!empty($images))
                        <div class="d-flex flex-column justify-content-center py-3">
                            <p class="text-center">Photo preview:</p>
                            <div class="">
                                <div class=" d-flex row justify-content-center bordered border-4 border-info rounded mb-2 gy-4 px-0 pt-0">
                                    @foreach ($images as $key => $image )

                                        
                                            <div class="box-cover3 img-preview mx-2 rounded">

                                                <img src="{{$image->temporaryUrl()}}" class="card-img img-category2 rounded-top-2" alt="Stony Beach"/>

                                                <button type="button" class="btn btn-danger rounded-top-0 w-100" wire:click="removeImage({{$key}})">{{__('ui.cancella')}}</button>

                                            </div>

                                            
                                            {{-- Vecchia versione preview Immagini--}}
                                            {{-- <div class="img-preview mx-auto" style="background-image: url({{ $image->temporaryUrl() }});">
                                            
                                            </div>
                                            
                                            <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})">{{__('ui.cancella')}}</button> --}}
                                        
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="text-center">
                        <button type="submit" class="btn-accedi">{{__('ui.creaAnnuncio')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
