<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php include('includes/header.php');
include('connection.php');

?>
 
<?php
    
   if (isset($_POST['submit'])) {
		// print_r($_FILES);die();

      $name         = $_POST['name'];
	  $last_name    = $_POST['last_name'];
	  $email        = $_POST['email'];
	  $password     = $_POST['password'];
	  $phone        = $_POST['phone'];
	  $company     =  $_POST['company'];
	  $website     =  $_POST['website'];
	  $address      = $_POST['address'];
	  $zip_code    =  $_POST['zip_code'];
	  $city        =  $_POST['city'];
	  $country     =  $_POST['country'];

    $sql = "INSERT INTO `registration`(`name`,`last_name`,`email`,`password`,`phone`,`company`,`website`,`address`,`zip_code`,`city`,`country`) VALUES ('$name','$last_name','$email','$password','$phone','$company','$website','$address','$zip_code','$city','$country')";

     $mysql = mysqli_query($conn,$sql);

	 if ($mysql== true) {
   
		echo '<script type="text/javascript">alert("Your Registr successfully..")</script>';
		echo "<script>location.href='login.php'</script>";
	}else{
	
		//header('location:.php');
		echo '<script type="text/javascript">alert("Data not Inserted")</script>';
		echo "<script>location.href='signup.php'</script>";
	}

}

  ?>
<section>
	<div class="container">
	<form  method="POST" class="my-login-validation">
			<div class="row pb-4">
				<div class="col-md-3">
					<h3>Personal Information</h3>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address</label>
								<input type="email" class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleFisrtName" class="form-label">First Name</label>
								<input type="text" class="form-control" name="name" id="exampleFisrtName" aria-describedby="emailHelp" required>
								
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleLastName" class="form-label">Last Name</label>
								<input type="text" class="form-control" name="last_name" id="exampleLastName" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleInputPhone" class="form-label">Phone Number</label>
								<input type="text" name="phone" class="form-control" id="exampleInputPhone" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleInputpassword" class="form-label">Password</label>
								<input type="password" name="password" class="form-control" id="exampleInputPhone" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-4">
				<div class="col-md-3">
					<h3>Company Information</h3>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleInputCompany" class="form-label">Company/Organization</label>
								<input type="text" name="company" class="form-control" id="exampleInputCompany">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleWebsite" class="form-label">Website<span>(optional)</span></label>
								<input type="text" name="website" class="form-control" id="exampleWebsite">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label for="exampleAddress" class="form-label">Street address</label>
								<input type="text" name="address" class="form-control" id="exampleAddress" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleZipcode" class="form-label">ZIP Code</label>
								<input type="text" name="zip_code" class="form-control" id="exampleZipcode" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleCity" class="form-label">City</label>
								<input type="text" name="city" class="form-control" id="exampleCity" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="exampleCountry" class="form-label">Country</label>
								<input type="text" name="country" class="form-control" id="exampleCountry" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-4">
				<div class="col-md-3">
					<h3>Newsletter</h3>
				</div>
				<div class="col-md-9">
					<div class="my-3 form-check">
						<input type="checkbox"  class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">I want to recieve Sendinblue newsletter to recieve Product updates and Marketing tips.</label>
					</div>
					<div>
						<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
						<button type="submit" name="submit" class="btn btn-primary">
										Submit
									</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
<?php include('includes/fooder.php'); ?>