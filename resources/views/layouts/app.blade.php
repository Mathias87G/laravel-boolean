<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <title>@yield('titolo')</title>
  </head>
  <body>
    <header>
      @include('partials/header')
    </header>
    <main>
      @yield('main')
    </main>

    <footer>
      @include('partials/footer')
    </footer>
  </body>
</html>
