@extends('dashbord.masterpage.master')
@section('title')
    category
@endsection
@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Categories
                    
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{route('category.add')}}" class=" waves-effect waves-block">Add category</a></li>
                                {{-- <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead>
                           
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action one</th>
                                <th>Action two</th>
                            </tr>
                        </thead>
                        <tbody> 
                             @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td><img src="{{url('images/'.$category->image)}}" width="150px" height="150px"></td>
                                <td><a class="btn btn-success" href="{{route('category.edit' , $category->id)}}">Edit</a></td>

                                <td>
                                    <form action="{{route('category.delete' , $category->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    
                                    
                                    
                                    </form>
                        
                        </td>
                                
                            </tr>
                         
                                  @endforeach 
                          
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
    @endsection
