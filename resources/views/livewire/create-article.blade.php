
<div class="container my-5">
    <div class="row justify-content-center">
        
        <div class="col-12 col-md-8">
            <form class="m-5" method="POST" wire:submit.prevent="createArticle">
                @csrf
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <label class="me-5">{{ __('ui.selectImg') }}:</label>
                        <label for="files" class="btnSubmit ms-auto d-flex justify-content-start shadow-none mt-2">{{ __('ui.selectFile') }}</label>
                    </div>
                    <input style="visibility:hidden;"  id="files" type="file" wire:model.live="temporary_images" multiple
                    class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                    @error('temporary_images.*')
                   <p class="text-danger">{{$message}}</p>
                   @enderror
                   @error('temporary_images')
                   <p class="text-danger">{{$message}}</p>
                   @enderror
                    @if (!empty($images)) 
                    <div class="row">
                        <div class="col-12">
                            <label>Photo preview:</label>
                            <div class="row  border-success rounded shadow py-4 mt-3 bgColorThree">
                                @foreach ($images as $key=> $image)
                                <div class="col d-flex flex-column align-items-center my-3 ">
                                    <div class="img-preview mx-auto shadow rounded position-relative z-1" style="background-image: url({{$image->temporaryUrl()}});">
                                        <button type="button" class="btn px-1 py-0 mt-1 me-1 m-0 btn-outline-danger  position-absolute end-0 top-0 z-2 " wire:click="removeImage({{$key}})"><i class="fa-solid fa-x"></i></button>
                                    </div>
                                   
                                </div>
                        
                                @endforeach
                        
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">{{ __('ui.title') }}</label>
                    <input type="text" class="form-control shadow-none" wire:model.blur="title">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">{{ __('ui.price') }}</label>
                    <input type="number" class="form-control shadow-none" wire:model.blur="price">
                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
                
                <div class="mb-3 position-relative">
                    <i class="fa-solid fa-chevron-down position-absolute"></i>
                    <label class="form-label">{{ __('ui.category') }}</label>
                    <select wire:model.blur="category" class="form-control shadow-none">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" id="{{ $category->id }}">
                            {{ __('ui.' . $category->name) }}
                        </option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
               
                <div class="mb-3">
                    <label class="form-label">{{ __('ui.description') }}</label>
                    <textarea class="form-control shadow-none" wire:model.blur="body" id="" cols="30" rows="5"></textarea>
                    @error('body')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btnSubmit">{{ __('ui.publishAd') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

