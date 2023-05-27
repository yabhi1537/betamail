<?php include('includes/header.php'); 
      include('connection.php');
?>
<?php 
    
    if (isset($_POST['submit'])) {
      //print_r($_FILES);die();

      $name       =  $_POST['name'];
      $email      =  $_POST['email'];
     // $password   =  $_POST['password'];
      $address    =  $_POST['address'];
      $state      =  $_POST['state'];
      $city       =  $_POST['city'];
      $zipcode    =  $_POST['zipcode'];
      $country    =  $_POST['country'];
      $mobile     =  $_POST['mobile'];
      $ip         =  $_POST['ip'];
      $plan       =  $_POST['plan'];

    $sql = "INSERT INTO `smtp`(`name`,`email`,`address`,`state`,`city`,`zipcode`,`country`,`mobile`,`ip`,`plan`) VALUES ('$name','$email','$address','$state','$city','$zipcode','$country','$mobile','$ip','$plan')";

     $mysql = mysqli_query($conn,$sql);
 
     if ($mysql==true) {
         echo '<script type="text/javascript">alert("Succesfully Data Inserted")</script>';
         echo "<script>location.href='buyhosting.php'</script>";
    }else{
        //header('location:buyhosting.php');
         echo '<script type="text/javascript">alert("Data not Inserted")</script>';
   }

  }

?>
<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
  <div class="container py-5">
    <div class="row align-items-center py-4">
      <div class="col-md-6 text-center text-md-left">
        <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">Buy Hosting
          </strong></h1>
      </div>
      <div class="col-md-6 text-center text-md-right">
        <div class="d-inline-flex align-items-center">
          <a class="btn btn-sm btn-outline-light" href="">Home</a>
          <i class="fas fa-angle-double-right text-light mx-2"></i>
          <a class="btn btn-sm btn-outline-light disabled" href="">Buy Hosting</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->


<!-- Detail Start -->
<div class="container-fluid py-5">
  <div class="container">
    <?php 
               $query = "SELECT * FROM byhosting";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
    <div class="row align-items-center">
      <div class="col-lg-5">
        <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>"></a>
        <!-- <img class="img-fluid" src="img/hosting.gif" alt=""> -->
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
        <div class="w3-container w3-center w3-animate-right">
          <h2 class="mb-4">
            <?php echo $row['tittle']; ?>
          </h2>
        </div>
        <h5 class="font-weight-medium font-serif mb-4">
          <?php echo $row['sub_tittle']; ?>
        </h5>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<!-- Detail End -->


<!-- Services Start -->
<div class="container">
  <div class="w3-container w3-center w3-animate-right">
    <h2 style="text-align: center;">Choose the Most Appropriate Plan for Your Website</h2>
  </div>
  <div class="row justify-content-around mt-5 mb-5 text-center">
    <div class="column col-sm-3 domain-col">
      <div class="card p-4">
        <h2>GoDaddy</h2>
        <h3>50% OFF</h3>
       <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
        <div class="form-popup" id="myForm1">
                      <form action="" class="form-container" method="POST" style="overflow-y: scroll !important; max-height: 611px;">
                          <h3 style="text-align: center;">If you'd like to buy a mailer, please get in touch with us.</h3>

                          
                          <input type="text" placeholder="Enter FullName" name="name" required>
                          
                          <input type="text" placeholder="Enter email id" name="email" required>
                          
                          
                          <!--<input type="password" placeholder="Enter password" name="password" required>-->
                          
                          <input type="text" placeholder="Enter Address" name="address" required>
                          
                          
                          <input type="text" placeholder="Enter State" name="state" required>
                          
                          <input type="text" placeholder="Enter City" name="city" required>
                          
                          <input type="text" placeholder="Enter Zipcode" name="zipcode" required>
                          
                          <input type="text" placeholder="Enter country" name="country" required>
                         
                          <input type="text" placeholder="Enter mobile no." name="mobile" required>

                          <label class="label" for="ip">Total Dedicated IP</label>
                          <select class="select" name="ip" id="ip">
                             <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                          </select>

                          <label  class="label" for="mail">Each IP will be charged for $20.</label>
                          <select class="select" name="plan" id="plan">
                             <option value="1" selected = "selected">Plan for 1 month</option>
                                        <option value="3" >Plan for 3 month</option>
                                        <option value="6" >Plan for 6 month</option>
                                        <option value="12" >Plan for 12 month</option>
                          </select>

                          <!-- <a href="" class="btn btn-saanvi mr-3 d-none d-lg-block"> </a> --> 
                          
                          <button type="submit" name="submit" id="submit" class="btn-whatsapp-submit"><strong>Submit</strong></button>
                          <a href="https://wa.me/message/YBLY57NBUFIMH1"> <button type="button" class="btn-whatsapp"><strong style="color: #12aa04;"><i class="fab fa-whatsapp" style="color:green"></i></strong>   WhatsApp </button></a>
                          <button type="button" class="btn-whatsapp-close" onclick="closeForm()">Close</button>
                        </form>
                      </div>
                      
                      <script>
                      function openForm() {
                        document.getElementById("myForm").style.display = "block";
                      }
                      
                      function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                      }
                      </script>
      </div>
    </div>
    <div class="column col-sm-3 domain-col">
      <div class="card p-4">
        <h2>Hostinger</h2>
        <h3>33% OFF</h3>
        <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
      </div>
    </div>

    <div class="column col-sm-3 domain-col">
      <div class="card p-4">
        <h2>Bluehost</h2>
        <h3>29% OFF</h3>
        <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
      </div>
    </div>

    <div class="column col-sm-3 domain-col">
      <div class="card p-4">
        <h2>Hostgator</h2>
        <h3>30% OFF</h3>
        <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
      </div>
    </div>
  </div>
    <!-- Services End -->

    <!-- Services Start -->
    <!-- <div class="w3-container w3-center w3-animate-right">
    <h2 style="color:white">...</h2>
  </div> -->
    
    <div class="row justify-content-around mt-5 mb-5 text-center">
      <div class="column col-sm-3 domain-col">
        <div class="card p-4">
          <h2>InMotion</h2>
          <h3>20% OFF</h3>
          <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
        </div>
      </div>

      <div class="column col-sm-3 domain-col">
        <div class="card p-4">
          <h2>A2 Hosting</h2>
          <h3>24% OFF</h3>
          <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
        </div>
      </div>

      <div class="column col-sm-3 domain-col">
        <div class="card p-4">
          <h2>HostPapa</h2>
          <h3>28% OFF</h3>
         <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
        </div>
      </div>

      <div class="column col-sm-3 domain-col">
        <div class="card p-4">
          <h2>Big Rock</h2>
          <h3>18% OFF</h3>
          <button title="button" class="action primary tocart domain-btn" onclick="openForm()">Buy Now</button>
        <br>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services End -->
<style type="text/css">
    .form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;  
  border: 3px solid #dddcdc;
  z-index: 9;
  
}

/* Add styles to the form container */
.form-container {
  max-width: 450px;
  padding: 10px;
  background-color: rgb(255, 255, 255);
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  padding: 5px;
}

.select {
width: 100%;
padding: 5px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

label {
    /* display: inline-block; */
    margin-bottom: 0.5rem;
}

.btn-whatsapp-submit{
 background-color: #3b3e34;
  color: white;
  height: 35px;
 border-radius :25px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;   
}

.btn-whatsapp{
  background-color: #3b3e34;
  color: white;
  border-radius :25px;
 height: 35px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.btn-whatsapp-close{
  background-color: rgba(255, 30, 30, 0.925);
  color: white;
  border-radius :25px;
  height: 35px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

</style>


<script>
    function openForm() {
         document.getElementById("myForm1").style.display = "block";
                      }
                      
     function closeForm() {
         document.getElementById("myForm1").style.display = "none";
                      }
</script>

<?php include('includes/fooder.php'); ?>