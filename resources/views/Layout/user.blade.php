<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      .navbar-light{
        background:#DBE8E1 !important; 
      }
    </style>

    @yield('style')

    <title>{{ $title }}</title>
  </head>
  <body>

    @include('Filler.navbar')
    
    <div class="container-fluid">
        @yield('hero')
    </div>

    <div class="container-fluid">
        @yield('content')
    </div>

      @include('Filler.footer')
  </body>
</html>