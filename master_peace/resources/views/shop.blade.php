@extends('masterpage.master')
@section('title')
    Shop
@endsection
@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/aboutus.jpg')}}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Collection Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">

						@foreach ($products as $product)
		    			<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
		    				<div class="product">
		    					<a href="#" class="img-prod"><img class="img-fluid" src="{{url('images/'.$product->main_image)}}" alt="Colorlib Template">
		    						<span class="status">30%</span>
		    						<div class="overlay"></div>
		    					</a>
		    					<div class="text py-3 px-3">
		    						<h3><a href="{{url('category/'.$category->id.'/'.$product->id)}}"> {{$product->name}}</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
				    						{{-- <p class="price"><span class="mr-2 price-dc">{{$product->price}}  JOD</span><span class="price-sale"></span></p> --}}
											<p class="price"><span>{{$product->price}}  JOD</span></p>
				    					</div>
				    					
			    					</div>
			    					<p class="bottom-area d-flex px-3">
		    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
		    							<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
		    						</p>

								
		    					</div>
		    				</div>
		    			</div>
						@endforeach

		    			
		    		</div>

		    		<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
		    	</div>

		    	<div class="col-md-4 col-lg-2 sidebar">
					@foreach($categories as $category)
		    		<div class="sidebar-box-2">
		    			<h2 class="heading mb-4"><a href="{{url ('view-category/'.$category->id)}}">{{$category->name}}</a></h2>
		    			
		    		</div>
					@endforeach
		    	
    			</div>
    		</div>
    	</div>
    </section>
	@endsection