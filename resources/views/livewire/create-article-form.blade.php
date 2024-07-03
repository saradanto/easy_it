<div class="col-lg-8 col-xl-6 border p-5 rounded">
    @if (session()->has('status'))
        {{ session('status') }}
    @endif
    <form wire:submit="store">
        <div class="form-floating mb-3">
            <input class="form-control" wire:model.blur="title" type="text" id="title">
            <label for="title">Titolo</label>
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" wire:model.blur="description" type="text">
            <label for="description" id="description">Descrizione</label>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div class=" mb-3">
            <label class="form-label" for="price">Price</label>
            <input class="form-control" wire:model.blur="price" rows="4" id="price"></input>
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class=" mb-3">
            <select wire:model.blur="category_id" class="form-select" aria-label="Default select example" id="category">
                <option value="" selected>Seleziona una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>


                @endforeach
            </select>
            @error('category_id')
                {{ $message }}
            @enderror
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Salva</button>
        </div>
    </form>
</div>
