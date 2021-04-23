<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Juan's Auto Paint</title>
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
        
        @yield('content')
</body>
</html>