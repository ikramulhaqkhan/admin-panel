<?php

session_start();

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');


?>
<link rel="stylesheet" href="assets/dist/css/style.css">
<center>
<div>

	<form action="code.php" method="post">
  <div class="container">
			
			<div>
				<div class="col-sm-3">
					<h1>Registration</h1>
				
					<hr class="mb-3">
					<label class="item1"><b>Full Name</b></label>
					<input class="form-control" id="fullname" type="text" name="fullname" required>

					<label class="item2"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label class="item3"><b>Contact</b></label>
					<input class="form-control" id="contact"  type="contact" name="contact" required>

			  	<label class="item4"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>

          <label class="item5">Image</label>
          <input class="form-control" id="image"  type="file" name="image" required>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="adduser" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
  
</div>
</center>
<?php



include('includes/footer.php');





?>