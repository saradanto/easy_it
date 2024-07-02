<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <x-layout>
        <x-navbarr/>
        <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center"> <div class="col-12 pt-5">
        <h1 class="display-2">Articoli della categoria <span>
        <div class="fst-italic fw-bold">{{ $category->name }}</span></h1>
        <div class="row height-custom justify-content-center align-items-center py-5"> @forelse ($articles as $article)
        <div class="col-12 col-md-3">
        <x-card :article="Sarticle" />
        </div>
        @empty
        <div class="col-12 text-center">
        <h3>
        Non sono ancora stati creati articoli per questa categoria!
        </h3>
        @auth
        <a class="btn btn-dark my-5" href="{{route('create.article')}}">Pubblica un articolo</a> @endauth
        </div>
        @endforelse
        </div>
        </div>
        </x-layout>

















        </div>
</body>
</html>