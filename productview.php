<?php include 'include/header.php'; ?>
	
	<?php include 'include/navbar.php'; ?>


<div class="container spacethis">
	<div class="row">
		<div class="col-md-4">
			<div class="demo">
			    <ul id="lightSlider">
			        <li data-thumb="img/produc.png">
			            <img src="img/produc.png" />
			        </li>
			         <li data-thumb="img/produc.png">
			            <img src="img/produc.png" />
			        </li>

			    </ul>
			</div>
		</div>
		<div class="col-md-8">
			<h1 class="product-vew-details">Adidas Originals</h1>
			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
			<p class="para">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio nobis quas, in est veniam. Veritatis obcaecati, officiis temporibus voluptatem illum nisi laudantium impedit cupiditate. Voluptate laborum perferendis tempora libero dicta.
			</p>
			<div class="size-row row">
				<div class="col-md-6">
					<b>Choose Size:</b>  &nbsp;&nbsp;&nbsp;<span>XS, S, M, L, XL, XXL</span>
				</div>
				<div class="col-md-6"><b>Choose Quantity:</b>  &nbsp;&nbsp;&nbsp; - 4 +</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h4>Price <span class="product_price">$39</span></h4>
				</div>
				<div class="col-md-6 text-right">
					<button class="btn btn-theme btn-round">Add To Cart</button>
				</div>
			</div>
		</div>
	</div>
	
</div>
<div class="container-fluid bg-gray">
	<div class="container spacethis">
		<h1 class="heading text-center"><span class="theme-color">Related </span> Product</h4>
		<h4 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
	<br>
		<div class="row">
						<div class="col-md-3">
							<div class="items">

								<img src="img/1524220106-2-6.jpeg" alt="">
								<div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>    
								                    <p>Men's running shirt</p>                                            
								                    
								                <!--     <div class="product-options">
													<button class="adc btn">Add To Cart</button>
													
								                </div>        -->                
								                </div>                         
								            </div>

							</div>
						</div>
						<div class="col-md-3">
							<div class="items">

								<img src="img/1524220106-2-6.jpeg" alt="">
								<div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>    
								                    <p>Men's running shirt</p>                                            
								                    
								                <!--     <div class="product-options">
													<button class="adc btn">Add To Cart</button>
													
								                </div>        -->                
								                </div>                         
								            </div>

							</div>
						</div>
							<div class="col-md-3">
							<div class="items">

								<img src="img/1524220106-2-6.jpeg" alt="">
								<div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>    
								                    <p>Men's running shirt</p>                                            
								                    
								                <!--     <div class="product-options">
													<button class="adc btn">Add To Cart</button>
													
								                </div>        -->                
								                </div>                         
								            </div>

							</div>
						</div>
						<div class="col-md-3">
							<div class="items">

								<img src="img/1524220106-2-6.jpeg" alt="">
								<div class="stats">        	
								                <div class="stats-container">
								                    <span class="product_price">$39</span>
								                    <span class="product_name">Adidas Originals</span>    
								                    <p>Men's running shirt</p>                                            
								                    
								                <!--     <div class="product-options">
													<button class="adc btn">Add To Cart</button>
													
								                </div>        -->                
								                </div>                         
								            </div>

							</div>
						</div>
					
					</div>
	</div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/lightslider.min.js"></script>
<script src="js/main.js"></script>


<script>
	$('#lightSlider').lightSlider({
	    gallery: true,
	    item: 1,
	    loop:true,
	    slideMargin: 0,
	    thumbItem: 9
	});
</script>
</body>
</html>