@extends('dashbord.masterpage.master')
@section('title')
    Products
@endsection
@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Products
                    
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{route('product.add')}}" class=" waves-effect waves-block">Add products</a></li>
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
                                <th>price</th>
                                <th>Image</th>
                                <th>Action one</th>
                                <th>Action two</th>
                            </tr>
                        </thead>
                        <tbody> 
                             @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{$product->id}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="{{url('images/'.$product->main_image)}}" width="150px" height="150px"></td>

                                <td><a class="btn btn-success" href="{{route('product.edit' , $product->id)}}">Edit</a></td>

                                <td>
                                    <form action="{{route('product.delete' , $product->id)}}" method="POST">
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
