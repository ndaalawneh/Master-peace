@extends('dashbord.masterpage.master')
@section('title')
    category
@endsection
@section('content')
<div class="container-fluid">

    <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name" name= "name">
        
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="description" name = "description">
        </div>
       
          <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="img" name = "image">
          </div>
    
       
        <button type="submit" class="btn btn-primary">Add Category</button>
      </form>


</div>
@endsection