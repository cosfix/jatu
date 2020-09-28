@extends('layouts.app')

@section('content')

<html>
<title>UserEdit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<!-- //error printing -->

<div class="container"> 
@if($data->count()>=1)
<form id="editform" action="{{route('update.data', $data->id)}}" method="POST">
@csrf


  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Jina Kamili</label> 
    <div class="col-6">
      <input id="name" name="name" type="text" value="{{$data->name}}" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="address" class="col-2 col-form-label">Anwani</label> 
    <div class="col-6">
      <input id="address" value="{{$data->address}}" name="address" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-2 col-form-label" >Namba ya Simu</label> 
    <div class="col-6">
      <input id="phone" name="phone" value="{{$data->phone}}" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="work" class="col-2 col-form-label" >Kazi Unayojishughulisha</label> 
    <div class="col-6">
      <input id="work" value="{{$data->work}}" name="work" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="location" class="col-2 col-form-label" >Mahala ilipo Kazi</label> 
    <div class="col-6">
      <input id="location" name="location" value="{{$data->location}}" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="street" class="col-2 col-form-label">Mtaa Unakoishi</label> 
    <div class="col-6">
      <input id="street" name="street" value="{{$data->street}}" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-2 col-form-label" >Hali ya Ndoa</label> 
    <div class="col-6">
      <input id="status" name="status" type="text" value="{{$data->status}}" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-6">
      <button name="submit" type="submit" class="btn btn-primary">Update Data</button>
    </div>
  </div>
</form>
@endif
</div>
@endsection