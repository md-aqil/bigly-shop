<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="aqil-icon/style.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>&nbsp;</h1>
	
<div class="container" style="background: #fff;">
	<div class="row">
		<aside class="col-md-3 pr0">
			<div class="sidebox">
				<img class="img-circle profile" src="img/produc.png" alt="">
				<h4 class="text-center"><a href="" >Md Aqil</a></h4>
				<br>
				
			<hr>
			<ul class="side-bar">
				<li><a href="admin.html" class="active">Your Products</a></li>
				<li><a href="orders.html">Orders</a></li>
				<li><a href="update-profile.html">Update Profile</a></li>
				<li><a href="address.html">Your Address</a></li>
			</ul>
			</div>
			
		</aside>




		<main class="col-md-9 pl0">

<div class="cd-cart-container empty">
	<a href="#0" class="cd-cart-trigger">
		Cart
		<ul class="count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .count -->
	</a>

	<div class="cd-cart">
		<div class="wrapper">
			<header>
				<h2>Cart</h2>
				<span class="undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer>
				<a href="#0" class="checkout btn">Checkout - $<span>0</span></a>
			</footer>
		</div>
	</div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->
	
			<div class="row addrow">
			<div class="col-md-4">
				<div class="items content">
					<div class="stats">        	
		                <div class="stats-container">
		                    <span class="product_name">Md Aqil</span>    
		                    <p>G-19,1st Floor,Near HCL, Sector 3, Noida, Uttar Pradesh 201301</p>                                            
		                    
		                </div>
		                 <div class="footer-status">
		                      <ul class="list-inline info-pro">
      					      	<li><a href="" class="text-danger"><i class="aqil-icon-trash-f"></i> Delete</a> | </li>
      					      	
      					      	<li><a href="">Edit <small class="aqil-icon-pencil-edit-button"></small> </a>|</li>
      					      	<li>
      					      		<input class="radio-btn" type="radio" id="test2" name="radio-group">
      					      		<label for="test2">Use This</label>
      					      	</li>
      					      </ul>
		                </div>           
		            </div>

				</div>
			</div>
			<div class="col-md-4">
				<div class="items content">
					<div class="stats">        	
		                <div class="stats-container">
		                    <span class="product_name">Md Aqil</span>    
		                    <p>G-19,1st Floor,Near HCL, Sector 3, Noida, Uttar Pradesh 201301</p>                                            
		                    
		                </div>
		                 <div class="footer-status">
		                      <ul class="list-inline info-pro">
      					      	<li><a href="" class="text-danger"><i class="aqil-icon-trash-f"></i> Delete</a> | </li>
      					      	<li><a href=""><small class=""></small> Edit  </a>|</li>
      					      	<li>
      					      		<input class="radio-btn" type="radio" id="test3" name="radio-group">
      					      		<label for="test3">Use This</label>
      					      	</li>
      					      </ul>
		                </div>           
		            </div>

				</div>
			</div>
			</div>

			<div class="form-address">
				<div class="col-md-12">
					<h4>Add New Address</h4>
					<hr class="mt0">
				</div>
				<div class="form-gorup clearfix">
					<div class="col-md-6">
						<label for="">Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<label for="">Phone</label>
						<input type="text" class="form-control">
					</div>

				</div>
				<div class="form-group col-md-12">
					<label for="">Address</label>
					<textarea name="" class="form-control" id="" cols="5"></textarea>
				</div>
				<div class="form-gorup clearfix">
					<div class="col-md-6">
						<label for="">Pin Code</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<label for="">City</label>
						<input type="text" class="form-control">
					</div>

				</div>
				<div class="form-gorup clearfix">
					<div class="col-md-6">
						<label for="">State</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6 mt20">
						<div class="row">
							<div class="col-md-6">
								<input class="switch" type="checkbox" id="switch" />
								<label for="switch" style="display: inline-block;">Toggle</label>
								<label for="switch" class="sl">Set As Default</label>
							</div>
							<div class="col-md-6">
								<button class="btn btn-theme">Save</button>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</main>
	</div>
	
</div>

<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
<script>
	

	    $('.radio-btn').change(function() {

	        if($(this).prop('checked')) {

	            $(this).parents('.items').addClass('active');

	        } else {
	            $(this).parents('.items').removeClass('active');
	        }
	    });



</script>
</body>
</html>