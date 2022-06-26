@extends('masterpage.master')
@section('title')
    join us
@endsection
@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('images/aboutus.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span></p>
            <h1 class="mb-0 bread">JOIN US</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">want to provide your products , fill the form please</h3>
	          	<div class="row align-items-end">
	          		
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Category</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="" id="" class="form-control">
		                  	<option value="">ACCESSORIES</option>
		                    <option value="">PAINTING</option>
		                    <option value="">CANDLES</option>
		                    <option value="">HOUSE ITEMS</option>
		                   
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Product Name</label>
	                  <input type="text" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>


		            <div class="col-md-6">
		            	<div class="form-group">
							<label for="streetaddress">Product Price</label>
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
					<div class="col-md-6">
		            	<div class="form-group">
							<label for="streetaddress">Product img1</label>
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
					<div class="col-md-6">
		            	<div class="form-group">
							<label for="streetaddress">Product img2</label>
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
					<div class="col-md-6">
		            	<div class="form-group">
							<label for="streetaddress">Product img3</label>
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>

					<div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Product Discription</label>
							<textarea rows="4" cols="90"></textarea>
						</div>
					</div>
				</div>
					
		           
                {{-- <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<div class="radio">
											<p>Don't Have Account ?</p>
										  <label class="mr-3"><input type="radio" name="optradio"> Create an Account </label>
										
										</div>
									</div>
                </div>
	            </div> --}}
	          </form><!-- END -->
			  <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Submit</a></p>


	         
	          
    </section> <!-- .section -->
	@endsection