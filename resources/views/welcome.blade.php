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
        <form class="m-5" action="{{url('/parkir')}}" >
            @csrf
            <div class="form-group mb-3 ">
              <label for="police_num" class="mb-1">Enter Police Number</label>
              <input name="police_num" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="B-1909-NRK">
              
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> 

    </div>
    </body>
</html>
