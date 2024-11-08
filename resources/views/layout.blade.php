<<<<<<< Updated upstream
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
    <li><a href="/home/">praktijk</a></li>
    <li><a href="/news/">over ons</a></li>
    <li><a href="/contact/">nieuws</a></li>
    <li><a href="/about/">spoed</a></li>
    <span class="material-symbols-outlined">person</span>
  </ul>
  @yield ('content')
  </body>
  </html>
=======
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/style.css"> <!-- Adjust path as needed -->
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home/">praktijk</a></li>
                <li><a href="/news/">over ons</a></li>
                <li><a href="/contact/">nieuws</a></li>
                <li><a href="/about/">spoed</a></li>
                <li><a href="{{ url('/login') }}"><span class="material-symbols-outlined">person</span></a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2024 Huisartsen De Poort - Alle rechten voorbehouden</p>
    </footer>
</body>
</html>

>>>>>>> Stashed changes
