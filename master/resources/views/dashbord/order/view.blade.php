@extends('dashbord.masterpage.master')
@section('title')
    Order Details
@endsection
@section('content')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Order Details
                    
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{route('user.create')}}" class=" waves-effect waves-block">Add users</a></li>
                                {{-- <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body table-responsive">
                    <h1> the order for :  {{$user->name }} </h1>
                    <table class="table table-striped">
                        <thead>
                           
                            <tr>
                                <th>#</th>
                                <th>user_id</th>
                                <th>order_id</th>
                                <th>product_id</th>
                                <th>Total</th>
                                <th>Quantity</th>


                               
                                {{-- <th>Action one</th> --}}
                                {{-- <th>Action </th> --}}
                            </tr>
                        </thead>
                        <tbody> 
                             @foreach ($carts as $cart)
                            <tr>
                                <th scope="row">{{$cart->id}}</th>
                                <td>{{$cart->user_id}}</td>
                                <td>{{$cart->order_id}}</td>
                                <td>{{$cart->product_id}}</td>
                                <td>{{$cart->total}}</td>
                                <td>{{$cart->quantity}}</td>
                                

                                {{-- <td>
                                    <a class="btn btn-success" href="{{route('order.show' , $order)}}">Show order details</a>
                                </td> --}}
                               
                               
                                {{-- <td><img src="{{url('images/'.$product->main_image)}}" width="150px" height="150px"></td> --}}

                                {{-- <td><a class="btn btn-success" href="{{route('product.edit' , $product->id)}}">Edit</a></td> --}}

                                {{-- <td>
                                    <form action="{{route('user.destroy' , $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    
                                    
                                    
                                    </form>
                        
                        </td> --}}
                                
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
