@extends('dashbord.masterpage.master')
@section('title')
    products
@endsection
@section('content')
<div class="container-fluid">

    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <input type="hidden" name="provider_id" value="1">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name" name= "name">
        
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="description" name = "description">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="price" name = "price" >
        </div>
       
          <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="img" name = "main_image">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Image1</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="img" name = "image1">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Image2</label>
            <input type="file" class="form-control" id="exampleInputPassword1" placeholder="img" name = "image2">
          </div>
          
          
          <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                      <p>
                        <b>select category</b>
                    </p>
                      
                    </div>
                    <div class="body">
                      <div class="row clearfix">
                          <div class="col-md-3">
                              <p>
                                  <b>Basic</b>
                              </p>
                            <select class="form-control show-tick" tabindex="-98" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                
                              
                              @endforeach
                              </select>

                          </div>
                          
                  </div>
            </div>
        </div>
 
       
        <button type="submit" class="btn btn-primary">Add Product</button>
      </form>


</div>
@endsection