<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    header
    -
    @if(session('msg'))
        {{ session('msg')}}
    @endif-
    @yield('main')
    <footer>
        footeer
    </footer>
</body>

</html>