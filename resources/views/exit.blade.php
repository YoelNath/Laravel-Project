<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        @include('layouts.app')

            <div class="container-xxl">

    <form class="m-5" action="{{url('/parkir')}}" method="POST" >
        @csrf
        <div class="form-group mb-3 ">
          <label for="unique_code" class="mb-1">Enter Unique Code to exit</label>
          <input name="unique_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="657e8b9c81d7b">
          
        </div>
        
        <button type="submit" class="btn btn-secondary">Exit</button>
    </form> 
    </div>
    </body>
</html>
