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

    $sql = "INSERT INTO `smtp`(`name`,`email`,`address`,`state`,`city`,`zipcode`,`country`,`mobile`,`ip`,`plan`) VALUES ('$name','$email','$address','$state','$city','$zipcode','$country','$mobile','$ip','$plan')";

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


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">E-MAIL SERVER SETUP
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="emailserver.html">E-MAIL SERVER SETUP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <style>
        
    .textColor{
    color:black;
        
    }
    </style>
    <div class="container-fluid box ">
        <div class="col-lg-12 .container-fluid.box">

                    <h2 class="cntn-box-title">Setting up an email server can seem like a daunting task, but with the right tools and knowledge, it can be done relatively easily. Here are the steps for setting up an email server:</h2>
                </div>
        <div class="row point-box" >
            <div class="col-md-6">
                <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <div class="number" >
                        <p>1</p>
                    </div>
                    <p>Choose an operating system. The most popular options for running an email server are Linux and Windows.</p>
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number" >
                        <p>3</p>
                    </div>
                    <p>Select a mail server software. Some popular options include Postfix, Exim, and Microsoft Exchange.</p>
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number" >
                        <p>5</p>
                    </div>
                    <p>Install and configure the mail server software. This will typically involve setting up domains, users, and email addresses.</p>
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                       <div class="number" >
                        <p>7</p>
                    </div>
                    <p>Configure DNS records. This will include creating MX records to route email to your server and setting up SPF and DKIM records to help prevent email spoofing.</p>
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number" >
                        <p>9</p>
                    </div>
                    <p>Set up email client software. This will typically involve configuring email clients like Outlook or Thunderbird to connect to the email server.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number" >
                        <p>2</p>
                    </div>
                    <p>Test your email server. Send test emails to and from the server to ensure everything is working correctly.</p>
                </div>
                 <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number" >
                        <p>4</p>
                    </div>
                    <p>Secure your server. This will include implementing security measures such as SSL/TLS encryption, firewalls, and anti-spam and anti-virus software.</p>
                </div>
                 <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number" >
                        <p>6</p>
                    </div>
                    <p>Back up your email server. Regularly back up your email server to protect against data loss.</p>
                </div> 
                <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <div class="number" >
                        <p>8</p>
                    </div>
                    <p>It's always recommended to hire professional service or consult them for setting up an email server.</p>
                </div>
                 <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                       <div class="number" >
                        <p>10</p>
                    </div>
                    <p>Please let me know if you have any specific questions about setting up an email server.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <?php 
                   $query = "SELECT * FROM emailserver";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h4 class="text-secondary text-uppercase font-weight-medium mb-3"><b><?php echo $row['tittle'];?></b></h4>
                    <h2 class="mb-4"><?php echo $row['sub_tittle'];?></h2>
                    <h5 class="font-weight-medium font-serif mb-4"><?php echo $row['massage'];?>Provide your business with a professional appearance by using fast email hosting services in India</h5>
                    <p class="mb-2">
                    </p>
                    <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Multiple domain support.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Comes as IMAP, POP3 and SMTP</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Complimentary SPAM protection</p>
                            </div>
                        </div>
                       
                        </div>
                    </div>
                </div>

                </div>
            </div>
        <?php }?>

        </div>
    </div>

   <!-- Detail End -->
<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-12">

                    <h2 class="section-title mb-3">Expert Custom Software Development With Latest Technologies</h2>
                </div>

            </div>
       <div class="row">
        <?php 
                   $query = "SELECT * FROM emailserverimg";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>

            <div class="col-lg-4 mb-2">
                <div class="shadow mb-4" style="height:400px;">
                    <div class="position-relative">
                        <a href="<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">

                            <div class="d-flex text-light">

                                
                            </div>
                        </a>
                    </div>
                    <p class="m-0 p-4"><?php echo $row['massage'];?>  
                    </p>
                </div>
            </div>
        <?php }?>
<!--             <div class="col-lg-4 mb-2">
                <div class="shadow mb-4">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/img09.jpg" alt="">
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">

                            <div class="d-flex text-light">
                                <small class="mr-2">
                                </small>
                            </div>
                        </a>
                    </div>
                    <p class="m-0 p-4">Developments that significantly reduce manual work in collection and processing functionalities to boost productivity. 
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="shadow mb-4">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/img15.jpg" alt="">
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                            <div class="d-flex text-light">
                                <small class="mr-2">
                            </small>
                            </div>
                        </a>
                    </div>
                    <p class="m-0 p-4">Easy interdepartmental information flow for better corporate and inter-organizational systems.
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Services End -->
<div class="container-fluid pt-5">
    <div class="container">
       
        <h4 class="display-4 text-center mb-5"><strong><b>Below are a few of the email hosting features we offer our customers.</b></strong></h4>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white   mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                        <img src="img/spam.jpg"width="100px">
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Spam Free</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white  mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                         <img src="img/support.png"width="130px">
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">24/7 Support</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                      <img src="img/remote.jpg"width="115px">  
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Remote web Access </h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white  mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                         <img src="img/security.png"width="120px">  
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Security Features</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<header>
      <!-- Bootstrap core CSS -->
  <!-- <link href="https://smtpprovider.com/wp-content/themes/smtp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 -->  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- Custom styles for this template -->
    <!-- <link rel="stylesheet" href="https://smtpprovider.com/wp-content/themes/smtp/slick/slick.css"> -->
  
    <link rel="stylesheet" href="https://smtpprovider.com/wp-content/themes/smtp/slick/slick-theme.css">
<!--     <link href="https://smtpprovider.com/wp-content/themes/smtp/css/smtp.css" rel="stylesheet">
 -->
 <link rel="stylesheet" type="text/css" href="css/style1.css">
 <!-- <link rel="stylesheet" type="text/css" href="js/min.js">  --> 
  <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,800;1,300;1,400;1,800&display=swap" rel="stylesheet"> --> 
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> --> 

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

 <!--  <link rel="stylesheet" href="https://smtpprovider.com/wp-content/themes/smtpproviders/vendor/flexslider/flexslider.css" media="screen" /> -->

    
  </header>
  <br>

  <section class="bycolorsec for-trns-back-card ">

  <div class="container">
    <br><br>
    <br>
    <div class="animate-back">
<div class="clouds"></div>
</div>
<div class="inner-pg-pd-top">
      <div class="top-back">
         <div class="container-fluid">

            <div class="row">
               <div class="col-lg-8 mx-auto text-center">
                <h3 class="font-weight-bold m-0 mt-2">Unlimited Email Plan </h3>
                    <h1 class="mb-2"></h1><br>
                    <p>
                    These plans give you access to unlimited email delivery without any restrictions. Ideal for big businesses.
                    </p>
               </div>


            </div>

         </div>
      </div>
   </div>
    
<!-- close 23.06.22 -->
    <!-- <div class="row h-100">
      <div class="col-md-8 mx-auto">
        <div class="about-block currency-block my-auto">
                                             <form class="formtopgap end-gap-none" onsubmit="return false;">
                                
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-7">Currency Converter</label>
                                    <div class="col-5">
                                        <select  onchange="get_currency(this.value);" id="currency" name="currency" class="form-control custom" id="exampleFormControlSelect1">
                                             <option value="">Change currency</option>
                                             <option value="INR~">INR</option>
                                             <option value="GBP~">GBP</option>
                                             <option value="EUR~">EUR</option>
                                             <option selected="selected" value="USD~none">USD</option>
                                        </select>
                                    </div>
                                  </div>
                                </form>
        </div>
      </div>
    </div> -->

    <br><br>
               
   <div class="row main-point-pro text-center non-img-pack packages-all">
    <?php 
        $query = "SELECT * FROM emailunlimitedplan";
        $sql   = mysqli_query($conn,$query);
        while($row= mysqli_fetch_assoc($sql))
    { ?>
          <script>
          var pircelst=[];
          </script>
          <script>
          pircelst.push("");
          </script>
          <style>
              .pull-right {
                   float: right;
               }
          </style>

    <div class="col-lg-4 mb-4 cards__item">   
     <div class="card option-box thumb-card text-center">
            
            <div class="card__content menu-content-link no-before square-look ">

        
            <div class="thumb-glry">
                 <div class="mycaption">

                        <h2 class="money">
                        <!-- <strong class="dollar">&#36;</strong> -->
                        <strong class="amount"><?php echo $row['tittle'];?></strong>
                        <span class="somoi">
                        <div class="slash">/</div>
                        <div class="month">month</div>
                        </span>
                        </h2>
                        <!-- <a href="http://smtpproviderapp.com/smtpprovider/users/register/283"> -->
                        <h6 class="category-title open" onclick="openForm()">Order now <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </h6>
                        <!-- </a> -->
                        <!-- <button class="open-button" onclick="openForm()"><b>Buy Now</b></button> -->
                        </div>
                        <br><br>
                        <div class="form-popup" id="myForm">
                        <form action="" class="form-container" method="POST" style="overflow-y: scroll !important; max-height: 611px;">
                          <h3 style="text-align: center;">If you'd like to buy a mailer, please get in touch with us.</h3>

                          
                          <input type="text" placeholder="Enter FullName" id="name" name="name" required>
                          
                          <input type="text" placeholder="Enter email id" id="email" name="email" required>
                          
                          
                          <!--<input type="password" placeholder="Enter password" id="password" name="password" required>-->
                          
                          <input type="text" placeholder="Enter Address" id="address" name="address" required>
                          
                          
                          <input type="text" placeholder="Enter State" id="state" name="state" required>
                          
                          <input type="text" placeholder="Enter City" id="city" name="city" required>
                          
                          <input type="text" placeholder="Enter Zipcode" id="zipcode" name="zipcode" required>
                          
                          <input type="text" placeholder="Enter country" id="country" name="country" required>
                         
                          <input type="text" placeholder="Enter mobile no." id="mobile" name="mobile" required>

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
                          
                          <button type="submit" name="submit" class="btn-whatsapp-submit"><strong>Submit</strong></button>
                          <a href="https://wa.me/message/YBLY57NBUFIMH1"> <button type="button" class="btn-whatsapp"><strong style="color: #12aa04;"><i class="fab fa-whatsapp" style="color:green"></i></strong>   WhatsApp </button></a>
                          <button type="button" class="btn-whatsapp-close" onclick="closeForm()">Close</button>
                        </form>
                      </div>
                      
                      <!--<script>-->
                      <!--function openForm() {-->
                      <!--  document.getElementById("myForm").style.display = "block";-->
                      <!--}-->
                      
                      <!--function closeForm() {-->
                      <!--  document.getElementById("myForm").style.display = "none";-->
                      <!--}-->
                      <!--</script>-->
                </div>
                <div class="card-title thumb-cont text-left thumb-cont">
                <h4 class="header-title mb-0">
                   <?php echo $row["unlimitedp1"]; ?>                </h4>
                </div>
            <!--<div class="top-list text-left">
                From Unlimited Email Plan
            </div>-->
            <div class="row info-act cart-info">
              <div class="col-12 mb-3">
                
                                      <ul class="unlimited-p">
                                         <li>
                                             <em>Speed/hour</em> 
                                             <strong class="pull-right"><?php echo $row["speed_hour"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Subscribers</em> 
                                             <strong class="pull-right"><?php echo $row["subscribers"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Subscription </em> 
                                             <strong class="pull-right"><?php echo $row["subscription"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Dedicated IP Addresses</em> 
                                             <strong class="pull-right"><?php echo $row["dedicated_ip_addresses"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Set-Up Delivery Time</em> 
                                             <strong class="pull-right"><?php echo $row["delivery_time"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>DKIM Setup</em> 
                                             <strong class="pull-right"><?php echo $row["dkim_setup"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>SPF Setup</em> 
                                             <strong class="pull-right"><?php echo $row["spf_setup"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>DMARC</em> 
                                             <strong class="pull-right"><?php echo $row["dmrc"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>FeedBack Loop</em> 
                                             <strong class="pull-right"><?php echo $row["feedBack_loop"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>rDNS</em> 
                                             <strong class="pull-right"><?php echo $row["rdns"]; ?></strong>
                                         </li>
                                         <li>
                                        
                                             <em>Mail-Tester Report</em> 
                                             <strong class="pull-right"><?php echo $row["mail_tester_report"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Fresh IP</em> 
                                             <strong class="pull-right"><?php echo $row["fresh_ip"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Unlimited Sending Domains</em> 
                                             <strong class="pull-right"><?php echo $row["unlimited_sending_domains"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Customized Email Template</em> 
                                             <strong class="pull-right"><?php echo $row["customized_email_template"]; ?></strong>
                                         </li>
                                         <li>
                                             <em>Customer Support</em> 
                                             <strong class="pull-right"><?php echo $row["customer_support"]; ?></strong>
                                         </li>
                                      </ul>
                    
                </div>
            </div>
        </div>
      
    </div>
   </div>
   <?php }?>
  </div>
  
 </div>
   <br><br><br>
    <!-- /.row -->


  </section>
   <style>
    h1{
        font-size:10px;
    }
    /*button{*/
        
        /*height: 40px;*/
    /*    width: 100px;*/
    /*    border-radius: 8%;*/
    /*background-color: #12aa04;*/
    /*color: white;*/
    /*}*/
    /*button:hover{*/
    /*    background-color: rgb(47, 216, 61);*/
    /*    color: white;*/
    /*    height: 40px;*/
    /*    width: 100px;*/
    /*    border-radius: 8%;*/
    /*    }*/
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
    .form-container{
    width: 100%;
    margin-top: 0;
  }
}
@media screen and (max-width: 1150px) {
    .form-container{
    width: 100%;
    margin-top: 0;
    font-size: 12px;
  }
}

</style>

<script>
  function openForm() {
   document.getElementById("myForm").style.display = "block";
 }
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
 <script>

//     function submitForm() {

//         var name       = $("#name").val();
//         var email      = $("#email").val();
//         var password   = $("#password").val();
//         var address    = $("#address").val();
//         var state      = $("#state").val();
//         var city       = $("#city").val();
//         var zipcode    = $("#zipcode").val();
//         var country    = $("#country").val();
//         var mobile     = $("#mobile").val();
//         var ip         = $("#ip").val();
//         var plan       = $("#plan").val();
      
//         $.ajax({
//             url: "emailserver_insertdata",
//             type: "POST",
//             data: {
//                     name    : name,
//                     email   : email,
//                     password: password,
//                     address : address,
//                     state   : state,
//                     city    : city,
//                     zipcode: zipcode,
//                     country : country,
//                     mobile  : mobile,
//                     ip      : ip,
//                     plan    : plan },
//             success: function(data) {
                
//                  alert(data); 
//             }
//         });
//   };
 

 </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include('includes/fooder.php'); ?>
