@extends('dashbord.masterpage.master')
@section('title')
    product edit
@endsection
@section('content')
<div class="container-fluid">



    
<form method="POST" action="{{route('product.update' , $product->id)}}" enctype="multipart/form-data">
    <div class="form-group">
        @csrf
        @method('PATCH')
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name" name= "name" value="{{$product->name}}">
    
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="description" name = "description" value="{{$product->description}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Price</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="price" name = "price" value="{{$product->price}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" class="form-control" id="exampleInputPassword1" placeholder="gener" name= "main_image" value="{{$product->main_image}}">
       
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Image1</label>
        <input type="file" class="form-control" id="exampleInputPassword1" placeholder="gener" name= "main_image" value="{{$product->main_image}}">
       
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Image2</label>
        <input type="file" class="form-control" id="exampleInputPassword1" placeholder="gener" name= "main_image" value="{{$product->main_image}}">
       
      </div>
     

   
    <button  class="btn btn-success" type="submit" class="btn btn-primary">Update</button>
  </form>





</div>
@endsection