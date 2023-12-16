<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('resources\css\app.css') }}" rel="stylesheet" type="text/css" >
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  <title>@yield('title')</title>
</head>
<body>

    <div class="containerfluid" >

      <a class="navbar-brand" href="#">Campus</a>


        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('mhs')}}">List mahasiswa</a>

          </li>
        </ul>

    </div>
  </nav>



  @yield('content')
</body>
</html>