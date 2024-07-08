<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Easy.it</label>
        <ul>
            <li>
                <a href="{{route('homepage')}}" class="active">Home</a>
            </li>
            <li>
                <a href="{{route('juri')}}">About</a>
            </li>
            <li>
                <a href="{{route('byCategory')}}">Services</a>
            </li>
            <li>
                <a href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
    </nav>
</body>
</html>