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
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding:0" >
    <div class="container-fluid" >
      <a class="navbar-brand" href="#">Campus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('mhs')}}">List mahasiswa</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>



  @yield('content')
</body>
</html>