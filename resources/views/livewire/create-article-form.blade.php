<div>

    <style>
        .img-preview {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 120px;
            width: 120px;
        }
    </style>
    <header class="" style="background-color: #CBE5EE; padding: 130px 0px;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">{{__('category.create')}}</h1>
                        <p class="lead fw-light text-50 mb-4">{{__('category.cMessage1')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container my-5 py-5 d-flex justify-content-center">
        <div class="col-12 col-md-12 col-sm-12 border-2 bg-white p-5 rounded-4" style="max-width: 1000px"> 

            <div class="row">
                <div class="col-12">
                    <a class="nav-link text-primary rounded-5 mb-5" href="{{route('article.index')}}"><i class="bi bi-arrow-left-short me-2"></i> {{__('category.back')}}</a>
                    @if (session()->has('status'))
                    {{ session('status') }}
                    @endif

                    <form wire:submit="store">
                        <p class="fst-italic">* il campo è obbligatorio</p>
                        <h3 class="h3 mb-3 mt-5 pt-3">{{__('category.description')}}</h3>
                        
                        <div class="row">
                            
                            {{-- input titolo --}}
                            <div class="form-floating mb-4 col-12 col-md-6">
                                <input class="form-control border-2" wire:model.blur="title" type="text" id="title">
                                <label class="ms-2" for="title">{{__('category.title')}} *</label>
                                @error('title')
                                <div class="alert alert-danger my-3 p-1" role="alert">
                                    {{ $message }}
                                </div> 
                                @enderror
                            </div>
                            
                            {{-- input prezzo --}}
                            <div class="form-floating mb-4 col-12 col-md-6">
                                <input class="form-control border-2" wire:model.blur="price" id="price"></input>
                                <label class="ms-2" for="price">{{__('category.price')}} *</label>
                                @error('price')
                                <div class="alert alert-danger my-3 p-1" role="alert">
                                    {{ $message }}
                                </div> 
                                @enderror
                            </div>
                            
                        </div>
                        
                        {{-- input descrizione --}}
                        <div class="form-floating mb-5">
                            <textarea class="form-control border-2" wire:model.blur="description" style="height: 180px" rows="5"></textarea>
                            <label for="description" id="description"> {{__('category.description')}} *</label>
                            @error('description')
                            <div class="alert alert-danger my-3 p-1" role="alert">
                                {{ $message }}
                            </div> 
                            @enderror
                        </div>
                        <h3 class="h3 mb-3 mt-5 pt-5">{{__('category.category')}}</h3>
                        
                        {{-- input categoria --}}
                        <div class="mb-5 form-floating d-flex justify-content-center align-items-center">
                            <select wire:model.blur="category_id" class="form-select rounded-3 border-2 py-2 px-4" id="category">
                                <option value="" selected>{{__('category.sCategory')}} *</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{__("category.$category->name")}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger my-3 p-1" role="alert">
                                {{ $message }}
                            </div> 
                            @enderror
                        </div>
                        
                        <h3 class="h3 mb-3 mt-5 pt-5">File</h3>
                        
                        {{-- input file --}}
                        {{-- <label for="images" class="drop-container mb-5" id="dropcontainer">
                            <span class="drop-title">Drop files here</span>
                            or
                            <input type="file" id="images" class="drop-button">
                        </label> --}}
                        
                        
                        {{-- multiple image --}}
                        
                        <div class="mb-3">
                            <input type="file" wire:model.live="temporary_images" multiple
                            class="form-control shadow @error("temporary_images.*") is-invalid @enderror" placeholder="Img/">
                            @error('temporary_images.*')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                            @enderror
                            @error('temporary_images')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        @if (!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>Photo preview: </p>
                                <div class="row border border-4 border-success rounded shadow py-4">
                                    @foreach ($images as $key => $image)
                                    <div class="col d-flex flex-column align-items-center my-3">
                                        <div class="img-preview nx-auto shadow rounded"
                                        style="background-image: url({{$image->temporaryUrl()}});"></div>
                                        <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">x</button>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        {{-- multiple image --}}
                        
                        
                        <div class="d-grid d-flex justify-content-center">
                            <button class="btn btn-dark rounded-3 mb-5 px-5 py-2" type="submit">{{__('category.save')}}</button>
                        </div>
                        
                    </form>

                </div>
            </div>

            
        </div>
    </div>
</div>