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
                  <h1 class="text-center" >Change Password</h1>
                  	<form class="user" action="#" method="post" >
                  		<div class="form-group">
                      	<input type="password" name="oldpwd" class="form-control form-control-user" placeholder="Enter old Password" autofocus required>
                    	</div>
                    	<div class="form-group">
                      	<input type="password" name="newpwd" class="form-control form-control-user" placeholder="Enter New password" required >
                    	</div>
                      <div class="form-group">
                        <input type="password" name="cnewpwd" class="form-control form-control-user" placeholder="Confirm new password" required >
                      </div>
                    	<button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                    	<hr>
                	</form>