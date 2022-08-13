@extends('dashbord.masterpage.master')
@section('title')
    Users
@endsection
@section('content')
<div class="container-fluid">

    <form method="POST" action="{{route('user.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name" name= "name">
        
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="email" name = "email">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name = "password" >
        </div>
       
          <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone" name = "phone">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">City</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="city" name = "city">
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Adress</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="adress" name = "adress">
          </div>
        
          
       
                   
                  
                         
                       
                          
             
           
 
       
        <button type="submit" class="btn btn-primary">Add User</button>
      </form>


</div>
@endsection