@extends('layouts.app')

@section('title','Mahasiswa')

@section('content')
<form action="{{url('/datas')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="pw" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
</form>
     

@endsection
