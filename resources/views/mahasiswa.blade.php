@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')
    <div class="container-text-center" >
        <div class="row row-cols-2" >
            <div class = "col"  >
            <H1 style="border:4px solid black; color:rgb(206, 0, 0)"> Nama </H1>
          
                @foreach ($mhs as $mhss)
                  <h1 style="border:1px solid black">{{$mhss->nama}}</h1>
                @endforeach

            </div>

        <div class ="col" >
            <h1 style="border:4px solid black; color:rgb(206, 0, 0)">NIM</h1>
  
            @foreach ($mhs as $mhss)
            <h1 style="border:1px solid black">{{$mhss->nim}}</h1>
          @endforeach
     
        </div>
    </div>
</div>
@endsection
