<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbarr</title>
</head>
<body>
    <div>
        {{ $slot }}
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    </a>
    Categorie
    <ul class="dropdown-menu">
    @foreach ($categories as $category)
    </ul>
    <li><a class="dropdown-item"
      href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
    @if ($loop->last)
    <hr class="dropdown-divider">
    @endif
    @endforeach
    </li>
    </div>
</body>
</html>
