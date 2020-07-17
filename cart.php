<?php 
include_once('includes/header.php'); 
include_once('includes/navbar.php');
?>

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-xl-6 col-lg-6 col-md-6">
			<div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12 justify-content-center">
                <div class="m-5">
                  <h1 class="text-center btn-primary" >Your Cart</h1>
                  <table class="table table-responsive table-bordered" style="margin: 0 auto;width: 75%">
                  	<tr>
                  		<td>Item</td>
                  		<td>Price</td>
                  	</tr>
                  	<tr>
                  		<td>Titan Watch</td>
                  		<td>Rs 4995</td>
                  	</tr>
                  </table>
                  <form action="buynow.php">
                  <button class="btn btn-primary btn-block">Checkout</button>
              </form>
              </div>
              </div>
          </div>
      </div></div>
	</div>
</div>