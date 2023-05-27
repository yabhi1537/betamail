<?php 
include('includes/header.php');
      include('connection.php');

 ?>

 <?php 
    
    if (isset($_POST['submit'])) {
      //print_r($_FILES);die();

      $full_name      =  $_POST['full_name'];
      $last_name    =  $_POST['last_name'];
      $mobile_number  =  $_POST['mobile_number'];
      $email          =  $_POST['email'];
      $city           =  $_POST['city'];
      $state          =  $_POST['state'];
      $desc          =  $_POST['description'];
      

    $sql = "INSERT INTO `maller_contact`(`first_name`,`last_name`,`email`,`mobileno`,`city`,`state`,`description`) VALUES ('$full_name','$last_name','$email','$mobile_number','$city','$state','$desc')";

     $mysql = mysqli_query($conmailer,$sql);
//   print_r($mysql);die();
    if ($mysql==true) {
        echo "<script type='text/javascript'>
        Swal.fire(
            'Thank you for submitting!',
            'Our team contact you soon!',
            'success'
        )
        </script>";
    }else{
        
       echo "<script type='text/javascript'>
        Swal.fire(
            'error!',
            'Your Data not Inserted!',
            'error'
        )
        </script>";
  }

    }

  ?>
  
  <script>
  
})

  </script>

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">Beta Mailer
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Home</a>
                        <!--<i class="fas fa-angle-double-right text-light mx-2"></i>-->
                        <!--<a class="btn btn-sm btn-outline-light disabled" href="">Get a Job</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Detail Start -->
    <div class="container careerf">
      <h2 class="text-center">Mailer Contact</h2>
      <div class="row p-5">
      <div class="col-md-12">
        <span><br/></span>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Full Name</label>
            <input type="text" class="form-control" id="name" name="full_name" placeholder="Name" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Last Name</label>
            <input type="name" class="form-control mt-2 mb-2" id="last_name" name="last_name" placeholder="Last Name" required>
          </div>
          
          
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control mt-2 mb-2" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Mobile Number<small style='color:red;'> (Fill with Contery code)</small></label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Number" required>
          </div>

          
          

          <!-- <div class="form-group col-md-6">
            <label for="inputPassword4">LinkedIn/Facebook Profile URL</label>
            <input type="text" class="form-control" id="linkedin_facebook" name="linkedin_facebook" placeholder="LinkedIn/Facebook">
          </div> -->
        </div>
       
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">State</label>
            <select id="state" name="state" class="form-control" required>
              <option value="">Choose...</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
            </select>
          </div>
          <div class='col-md-12'>
              <label>Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>

          </div>
          
        </div>
        
        
       
        <div class="mt-4">
        <button type="submit" name="submit" id="submit" onclick="myFunction1()" class="btn btn-primary">Submit</button>
              </div>
      </form>
      </div>
      
      </div>
      </div>
      </body>
      </html>
      <script>
        $('option').mousedown(function(e) {
              e.preventDefault();
              $(this).prop('selected', !$(this).prop('selected'));
              return false;
          });
      </script>
      <script type="text/javascript">
        function other_post_check(){
          if ($('#post_apply').val()=='other') {
            $('#other_post').show();
          }
          else{
            $('#other_post').hide();
          }
        }
      </script>
  
      <!--detail end-->

    <?php include('includes/fooder.php'); ?>
    