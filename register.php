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
                  <h1 class="text-center" >Sign Up</h1>
                  <form class="user" action="#" method="post" >
                  	<div class="form-group">
                      <input type="number" name="mobile" class="form-control form-control-user" placeholder="Enter Mobile No." autofocus required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user"  placeholder="Password" required>
                    </div>
                   <div class="form-group">
                      <input type="password" name="cpassword" class="form-control form-control-user" placeholder="Confirm Password!" required>
                    </div>
                     <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Register</button>
                     <hr>
                 </form>
                    <h3 class="text-center" >Existing User?<a href="login.php">Login</a></h3>
                    
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <?php include('includes/footer.php');?>



