@extends('dashbord.masterpage.master')
@section('title')
    category edit
@endsection
@section('content')
<div class="container-fluid">



    
<form method="POST" action="{{route('category.update' , $category->id)}}" enctype="multipart/form-data">
    <div class="form-group">
        @csrf
        @method('PATCH')
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name" name= "name" value="{{$category->name}}">
    
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="description" name = "description" value="{{$category->description}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" class="form-control" id="exampleInputPassword1" placeholder="gener" name= "image" value="{{$category->image}}">
        <img  src="{{url('images/'.$category->image)}}" width="150px" height="150px">
      </div>
     

   
    <button  class="btn btn-success" type="submit" class="btn btn-primary">Update</button>
  </form>





</div>
@endsection