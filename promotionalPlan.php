<?php include('includes/header.php');
      include('connection.php');
      
 ?>
  <?php 
     
//print_r($_POST);die();
    if (isset($_POST['submit'])) {
    

      $name       =  $_POST['name'];
      $email      =  $_POST['email'];
    //   $password   =  $_POST['password'];
      $address    =  $_POST['address'];
      $state      =  $_POST['state'];
      $city       =  $_POST['city'];
      $zipcode    =  $_POST['zipcode'];
      $country    =  $_POST['country'];
      $mobile     =  $_POST['mobile'];
      $ip         =  $_POST['ip'];
      $plan       =  $_POST['plan'];

    $sql = "INSERT INTO `promotinal_plan_contact`(`name`,`email`,`address`,`state`,`city`,`zipcode`,`country`,`mobile`,`ip`,`plan`) VALUES ('$name','$email','$address','$state','$city','$zipcode','$country','$mobile','$ip','$plan')";

     $mysql = mysqli_query($conn,$sql);
    // print_r($sql);die();
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

 <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
      h2.cntn-box-title {
    margin: 0 70px 40px 70px;
     color: #000; 
    font-size: 24px;
    text-align: center;
    padding-top: 50px;
    font-family: Verdana,sans-serif;
}
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
.form-container input[type=text],
.form-container input[type=password] {
    width: 100%;
    padding: 5px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
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

/* Set a style for the submit/login button */
/*.form-container .btn {*/
/*  background-color: #241d1d;*/
/*  color: white;*/
/*  padding: 5px 20px;*/
/*  border: none;*/
/*  cursor: pointer;*/
/*  width: 100%;*/
/*  margin-bottom:10px;*/
/*  opacity: 0.8;*/
/*}*/

.btn-whatsapp-submit {
    background-color: #3b3e34;
    color: white;
    height: 35px;
    border-radius: 25px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}

.btn-whatsapp {
    background-color: #3b3e34;
    color: white;
    border-radius: 25px;
    height: 35px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}

.btn-whatsapp-close {
    background-color: rgba(255, 30, 30, 0.925);
    color: white;
    border-radius: 25px;
    height: 35px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}

/* Add a red background color to the cancel button */
/*.form-container .cancel {*/
/*  background-color: rgba(255, 30, 30, 0.925);*/
/*}*/

/* Add some hover effects to buttons */
/*.form-containe {*/
/*  opacity: 4;*/
/*  height: 50px;*/
/*        width: 100px;*/
/*        border-radius: 8%;*/
/*    background-color: #12aa04;*/
/*    color: white;*/

/*}*/
@media screen and (max-width: 999px) {
    .form-container {
        width: 100%;
        margin-top: 0;
    }
}

@media screen and (max-width: 1150px) {
    .form-container {
        width: 100%;
        margin-top: 0;
        font-size: 12px;
    }
}
  </style>
  
  
  
 <div class="container-fluid bg-primary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">Promotional Email Plans
                    </strong></h1>
                    
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">PROMOTIONAL-PLAN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid.box">
        <div class="col-md-12">
                    <h2 class="cntn-box-title">Our Promotional Plan Provide cost-effective and reliable email Marketing Service based on cloud computing.</h2>
        </div>
     </div>

 
    <section class="bycolorsec for-trns-back-card ">
        <div class="container">
            <div class="row main-point-pro text-center non-img-pack packages-all">
                <?php 
                   $query = "SELECT * FROM promotional";
                   $sql   = mysqli_query($conn,$query);
                   //print_r($sql);die();
                   while($row = mysqli_fetch_array($sql)){
                      $features = explode("|", $row['features']);
                   ?>
             
                
                <div class="col-lg-4 mb-4 cards__item">
                    <div class="card option-box thumb-card text-center">
                        <!--<a href="https://dashboard.smtpprovider.com/register?plan=2">-->
                            <div class="card__content menu-content-link no-before square-look ">
                                <div class="thumb-glry">
                                    <div class="mycaption">
                                        <h2 class="money"><span class="amount"><?php echo $row['price'] ?></span></h2>
                                        <h6 class="category-title" onclick="openForm()">Order now <i class="fa fa-angle-double-right"
                                                aria-hidden="true"></i></h6>
                                    </div>
                                </div>
                                <div class="card-title thumb-cont text-left thumb-cont">
                                    <h4 class="header-title mb-0"><?php echo $row['title'] ?></h4>
                                </div>
                                
                                <div class="top-list text-left">
                                   <?php echo $row['heading'] ?> </div>
                                <div class="row info-act cart-info">
                                    <?php
                                    foreach($features as $key => $val){
                                        ?>
					                <div class="col-6 mb-3">
					                    <i class="fa fa-hourglass-start" aria-hidden="true"></i>
					                    <span><?php echo $val ?></span>
					               </div>
                                        <?php
                                    }
                                    ?>
					  
					        </div>
                            </div>
                        <!--</a>-->
                    </div>
                </div>
                
                
                <?php
                   }
                ?>
            </div>
        </div>
        <!-- /.row -->
    </section>
<br><br>
                            <div class="form-popup" id="myForm">
                                <form action="" class="form-container" method="POST"
                                    style="overflow-y: scroll !important; max-height: 611px;">
                                    <h3 style="text-align: center;">If you'd like to buy a mailer, please get in touch
                                        with us.</h3>


                                    <input type="text" placeholder="Enter FullName" id="name" name="name" required>

                                    <input type="text" placeholder="Enter email id" id="email" name="email" required>


                                    <!--<input type="password" placeholder="Enter password" id="password" name="password" required>-->

                                    <input type="text" placeholder="Enter Address" id="address" name="address" required>


                                    <input type="text" placeholder="Enter State" id="state" name="state" required>

                                    <input type="text" placeholder="Enter City" id="city" name="city" required>

                                    <input type="text" placeholder="Enter Zipcode" id="zipcode" name="zipcode" required>

                                    <input type="text" placeholder="Enter country" id="country" name="country" required>

                                    <input type="text" placeholder="Enter mobile no." id="mobile" name="mobile"
                                        required>

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

                                    <label class="label" for="mail">Each IP will be charged for $20.</label>
                                    <select class="select" name="plan" id="plan">
                                        <option value="1" selected="selected">Plan for 1 month</option>
                                        <option value="3">Plan for 3 month</option>
                                        <option value="6">Plan for 6 month</option>
                                        <option value="12">Plan for 12 month</option>
                                    </select>

                                    <!-- <a href="" class="btn btn-saanvi mr-3 d-none d-lg-block"> </a> -->

                                    <button type="submit" name="submit"
                                        class="btn-whatsapp-submit"><strong>Submit</strong></button>
                                    <a href="https://wa.me/message/YBLY57NBUFIMH1"> <button type="button"
                                            class="btn-whatsapp"><strong style="color: #12aa04;"><i
                                                    class="fab fa-whatsapp" style="color:green"></i></strong> WhatsApp
                                        </button></a>
                                    <button type="button" class="btn-whatsapp-close"
                                        onclick="closeForm()">Close</button>
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
 <?php include('includes/fooder.php'); ?>