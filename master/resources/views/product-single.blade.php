@extends('masterpage.master')
@section('title')
single product
@endsection
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('{{asset('images/aboutus.jpg')}}');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
				<h1 class="mb-0 bread">Product Single</h1>
			</div>
        </div>
      </div>
    </div>
	
	<form action={{route('add_cart')}} method="post">
    <section class="ftco-section">
    	<div class="container">
			
    		<div class="row">
    			<div class="col-lg-6 mb-5  ftco-animate">
    				<a href="images/menu-2.jpg" class="image-popup"><img src="{{url('images/'.$products->main_image)}}" class="img-fluid" width="600px" height="1096px" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>{{$products->name}}</h3>
    				<p class="price"><span>{{$products->price}} JOD</span></p>
    				<p>{{$products->description}}</p>
					
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group d-flex">
								<div class="select-wrap">
									
									
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="input-group col-md-6 d-flex mb-3">
							{{-- <input type="hidden" value="{{$products->id}}" class="product_id"> --}}
							<span class="input-group-btn mr-2">
								
					<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
				   <i class="ion-ios-remove"></i>
					</button>
					</span>
				 <input type="text" name="quantity" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
				 <span class="input-group-btn ml-2">
					<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
					 <i class="ion-ios-add"></i>
				 </button>
				 </span>
			  </div>
			  <div class="w-100"></div>
			 
		  </div>

				
	          	
				@csrf
				<input type="hidden" value='{{$products->id}}' name="product_id">	
				<input type="hidden" value='{{$products->name}}' name="product_name">	
				<input type="hidden" value='{{$products->price}}' name="product_price">	
				<input type="hidden" value='{{$products->main_image}}' name="product_image">	
          	<p><input type="submit"  class="btn btn-black py-3 px-5 mt-4" value="Add to Cart" ></p>
		</div>
	</div>
	
</div>
</section>
</form>

    {{-- <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Ralated Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Floral Jackquard Pullover</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Floral Jackquard Pullover</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Floral Jackquard Pullover</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Floral Jackquard Pullover</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
		    					<div class="rating">
	    							<p class="text-right">
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    								<a href="#"><span class="ion-ios-star-outline"></span></a>
	    							</p>
	    						</div>
	    					</div>
    						<p class="bottom-area d-flex px-3">
    							<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
    							<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> --}}

 
    @endsection

	@section('script')
	<script>
	
		$(document).ready(function(){

// $('addToCartBtn').click(function(e){
// 				e.preventDefault();

// 				var product_id = $(this).closest('.product_data').find('.product_id').val();
// 				var product_quantity = $(this).closest('.product_data').find('.input-number').val();

// 				alert(product_id );
// 				alert(product_quantity);
				
// 			});
			

			

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){


		
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
	@endsection