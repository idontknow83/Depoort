<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ config("app.url") }}/resources/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @yield ('title')
</head>
<body>
<ul class="hnavbar">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
    @guest
    <li><a href="{{ url('/login') }}">Login</a></li>
    @endguest
    @auth
    <li><a href="{{ url('/account/info') }}">Account</a></li>
    @endauth
    {{-- <span class="material-symbols-outlined">person</span> --}}
</ul>
@yield ('content')
</body>
</html>
