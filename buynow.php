<?php 
include_once('includes/header.php'); 
include_once('includes/navbar.php');
?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <h1 class="text-center" >Enter your details</h1>
                  	<form class="user" action="track.php" method="post" >
                  		<div class="form-group">
                      	Payment Option
                        <select class="form-control">
                          <option>Cash on delivery</option>
                        </select>
                    	</div>
                    	<div class="form-group">
                      	<input type="text" name="text" class="form-control form-control-user" placeholder="Any Personalised Message..">
                    	</div>
                      <div class="form-group">
                        <textarea class="form-control">Enter Your Shipping Address</textarea>
                      </div>
                    	<button type="submit" name="contact_btn" class="btn btn-primary btn-user btn-block">Place Order</button>
                    	<hr>
                	</form>
                   
                    
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php include('includes/footer.php');?>