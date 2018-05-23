
<?php include 'include/header.php'; ?>

<body style="background: #fff;">

<?php include 'include/navbar.php'; ?>
<?php include 'include/cart.php'; ?>


<div class="container spacethis">
	
	<table class="table vpt text-center">
		<tr class="text-center">
			<th>Product</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		<tr class="text-center">
			<td width="300">
				<ul class="media-list">
				  <li class="media ">
				    <div class="media-left">
				      <a href="#">
				        <img class="media-object" src="img/produc.png" width="80" alt="...">
				      </a>
				    </div>
				    <div class="media-body media-middle">
				      <h4 class="media-heading">Media heading</h4>
				     
				    </div>
				  </li> 
				  
				 
				</ul>
			</td>
			<td > <span contenteditable="true" class="edit">1</span></td>
			<td><i class="aqil-icon-rupee-indian"></i> 120</td>
			<td><i class="aqil-icon-rupee-indian"></i> 120</td>
			<td><i class="aqil-icon-close"></i></td>
		</tr>
		<tr class="text-center">
			<td width="300">
				<ul class="media-list">
				  <li class="media ">
				    <div class="media-left">
				      <a href="#">
				        <img class="media-object" src="img/produc.png" width="80" alt="...">
				      </a>
				    </div>
				    <div class="media-body media-middle">
				      <h4 class="media-heading">Media heading</h4>
				     
				    </div>
				  </li> 
				  
				 
				</ul>
			</td>
			<td > <span contenteditable="true" class="edit">1</span></td>
			
			<td><i class="aqil-icon-rupee-indian"></i> 120</td>
			<td><i class="aqil-icon-rupee-indian"></i> 120</td>
			<td><i class="aqil-icon-close"></i></td>
		</tr>

		<tr class="cupon-row">
		    <td colspan="2">
				<div class="input-group">
				              <input type="text" class="form-control" placeholder="Search&hellip;">
				              <span class="input-group-btn">
				                  <button type="button" class="btn btn-theme">APPLY CUPON</button>
				              </span>
				          </div>
		     </td>
		    <td colspan="3" style="text-align: right;">
		    	<button class="btn btn-theme">UPDATE CART</button>
		    </td>
		</tr>
	</table>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<div class="prck">
				<table class="table">
					<tr>
						<th>Subtotal</th>
						<td>$24.00</td>
					</tr>
					<tr>
						<th>Total</th>
						<td>$24.00</td>
					</tr>
				</table>
				<div class="text-right">
					
				<button class="btn btn-theme">Proceed to Checkout</button>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/lightslider.min.js"></script>

<script src="js/main.js"></script>

</body>
</html>