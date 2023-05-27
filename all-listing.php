<?php  
   include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RZL53S15KY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RZL53S15KY');
</script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "bf059358-a616-41be-8372-70102d6d0627",
      safari_web_id: "",
      notifyButton: {
        enable: true,
      },
    });
  });
</script>
    <meta charset="utf-8">
    <title>βETA IT Solution</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="βETA IT Solution" name="keywords">
    <meta content="βETA IT Solution" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
</head>
<style media="screen">
    *,
*:before,
*:after{
padding: 0;
margin: 0;
box-sizing: border-box;
}


.popup{
        position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0;
    max-width: 50%;
    margin: 5% auto;
    /*position:fixed;*/
    background-color: black;
    /*width: 950px;*/
    color: white;
    height: 450px;
    padding: 30px 40px;
    /*transform: translate(-50%,-50%);*/
    /*left: 50%;*/
    /*top: 50%;*/
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none; 
    text-align: center;
   
}
.body{
    background-color: black;
}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
        background: #9a1f03;
        border-radius: 100%;
        width: 40px;
        height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
margin-top: -20px;
}
.popup p{
font-size: 14px;
text-align: justify;
margin: 20px 0;
line-height: 25px;
}

input[type=text], select {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

input[type=submit] {
width: 100%;
background-color: #0dda06b4;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: green;
}

@media (max-width: 480px){
    .popup{
        color:white;
        max-width: 90%;
    }
}
.popup p{
    font-size: 14px;
}    



    h1 {
        font-size: 10px;
    }
</style>
<style>
 /* styling search bar */
    .search .input1[type=text]{
        width:300px;
        height:0px;
        border-radius:3px;
        /*border: black;*/
        /*height: 0px;*/
        padding: 26px 44px;
        margin: 10px 0;
        
    }
    .search{
        float:right;
        margin:7px;
    }
         
    .search button{
        background-color: white;
        color: #f2f2f2;
        float: right;
        padding: 12px 51px;
        margin-right: 24px 0px;
        font-size: 12px;
        border: none;
        cursor: pointer;
    }
    
    .button-bulkmail {
        height: 27px;
        width: 24%;
        border-radius: 15%;
        background-color: #12aa04;
        color: white;
        margin-top: 12px !important;
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
  
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  
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

</style>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="img/logoo-removebg-preview.png" width="160px">
                </a>
            </div>
            <div class="col-lg-9">
                <?php 
               $query1 = "SELECT * FROM contact_us";
               $sql1   = mysqli_query($conn,$query1);
               while($row = mysqli_fetch_array($sql1)){ 
                 ?>
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small><b><?php echo $row['email']; ?></b></small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small><b><?php echo $row['contact']; ?></b></small>
                        </div>
                    </div>
            <?php }?>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="https://facebook.com/betaitsolution" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary p-2" href="https://twitter.com/betaitsolution" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary p-2" href="https://LinkedIn.com/company/betaitsolution" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary p-2" href="https://instagram.com/betaitsolution" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary p-2" href="https://youtube.com/channel/UCdck5oaushOSl7h8Bt3SJ-Q" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0 mt-3">
                     <ul>
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <img src="img/logoo-removebg-preview.png" width="160px">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                   
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                           
                            <li>
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            </li>

                 <div class="search">
                   
                       <input id="searchfilter" class="input1" type="text"  onkeyup="search_product()  placeholder=" Search......"></input>
                             
                        
                            <form id="testing">
                                <?php 
                                    $yerst1 = "SELECT * FROM categories";
                                    $mysqly1 = mysqli_query($conn,$yerst1);
                                    while($catdata = mysqli_fetch_assoc($mysqly1)){
                                     $catid=$catdata['id'];
                                ?>
                                <li> <a href="all-listing.php?id=<?php echo $catid ?>" class="dropdown-item"><?php echo $catdata['categories'] ?></a> </li>
                                <?php } ?>
                                       
                            </form>
                                    
                   <!-- <button>-->
                   <!--   <i class="fa fa-search"-->
                   <!--     style="font-size: 18px;">-->
                   <!--   </i>-->
                   <!--</button>-->
                  
                 </div>
                            <?php 
                            
                                $sql2 = "SELECT * FROM taps";
                                $query2= mysqli_query($conn,$sql2);
                                while($data = mysqli_fetch_assoc($query2)){
                            ?>
                                <?php 
                                    if($data['stats']=="1" && $data['taps']=="Our Tools"){
                                ?>
                                <!--<a href="ourtools.php" class="nav-item nav-link" }>Our Tools</a>-->
                            <li>
                             <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Categorys</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    
                                    <ul id="myul">
                                        <?php   
                                            $yerst = "SELECT * FROM categories";
                                            $mysqly = mysqli_query($conn,$yerst);
                                            while($catdata = mysqli_fetch_assoc($mysqly)){
                                                $catid=$catdata['id'];
                                        ?>
                                        <li> <a href="all-listing.php?id=<?php echo $catid ?>" class="dropdown-item"><?php echo $catdata['categories'] ?></a> </li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                              </div>
                            </li>
                            
                                <?php } ?>
                                
                                
                            <?php  } ?>
                            
                            
                        </div>
                        
                    </div>
                    </ul>
                    
                </nav>
              
             </div>
            
        </div>
    </div>
    
    
   
    

    
    <!-- Header End -->
    <div class="container">
        
             <?php 
               $id = $_GET['id'];
               
               // $id = $_GET['id'];
                $query221= "SELECT * FROM categories WHERE id='$id'";
                $catquery = mysqli_query($conn,$query221);
                $catdata = mysqli_fetch_assoc($catquery);
                
               ?>
               <?php
                // $id = $_GET['id'];
                $query333= "SELECT * FROM bulkemailsending";
                $pdf1 = mysqli_query($conn,$query333);
                $pdfrow = mysqli_fetch_assoc($pdf1);
                
               ?>
               <h3 clas="text-center"><u><?php echo $catdata['categories'] ?></u></h3>
               
                <?php
               $query121 = "SELECT * FROM product WHERE cat_id='$id'" ;
               //   print_r( $query121);die();
               $sql121   = mysqli_query($conn,$query121);
               while($row121 = mysqli_fetch_array($sql121)){
                   
                   //$id=$row['cat_id'];
                  // print_r(categories);die();
                
            ?>
            <h2 class="headline">
                
            </h2>
              <div class ="row">
                  <div class="col-md-6">
                    <img src="admin/<?php echo $row121['image'] ?>" height="400px" width="500px" ><br>
                    <a href="admin/<?php echo $row121['pdf']; ?>"download><button id="GetFile" class="button-bulkmail"><b>Download</b></button> </a>
                     <a href="https://betaitsolution.com/price.php"><button id="GetFile" class="button-bulkmail"><b><?php echo $row121['price'] ?></b></button> </a>
                     <button id="GetFile" class="button-bulkmail" onclick="openForm()"><b>Bye Now</b></button>
                </div>
                
                <div class="col-md-6">
                <h2><?php echo $row121['pname'] ?></h2>
                     <h2><?php echo $row121['title'] ?></h2> 
                    <p> <?php echo $row121['subtitle'] ?></p> <br>
                </div>
              </div>
            <?php } ?>
    </div>
    
     <br>
      <br>
    
    
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h3 class="m-0 mt-n3 display-4 text-primary">βETA</h3>
                </a>
                <p>To succeed, every software solution must be deeply integrated into the existing tech environment..
                </p>
            </div>
            <?php 
               $query = "SELECT * FROM contact_us";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){ 
                
            ?>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch With Us</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $row['address']; ?></p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i><?php echo $row['contact']; ?>

                </p>
                <p><i class="fa fa-envelope text-primary mr-2"></i><?php echo $row['email']; ?>

                </p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="https://twitter.com/betaitsolution" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://facebook.com/betaitsolution" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="https://LinkedIn.com/company/betaitsolution" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="https://instagram.com/betaitsolution" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div><?php }?>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="career.php"><i class="fa fa-angle-right mr-2"></i>Career</a>
                    <a class="text-white" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button style="margin-top: 8px;" class="btn btn-primary px-4">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5 pt-5 pb-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-12 text-center text-md-center mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#"> βETA IT Solutions</a>.Copyright © 2022 βETA IT Solutions | All Rights Reserved. <a href="#"></a>
                </p>
            </div>
        </div>
    </div>    
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>
   <div class="form-popup" id="myForm">
                                <form  class="form-container" method="POST"
                                    style="overflow-y: scroll !important; max-height: 611px;">
                                    <h3 style="text-align: center;">If you'd like to buy a mailer, please get in touch
                                        with us.</h3>


                                    <input type="text" placeholder="Enter Name" id="name" name="name" required>

                                    <input type="text" placeholder="Enter Email id" id="email" name="email" required>


                                    <input type="text" placeholder="Enter mobile no." id="mobile" name="mobile">
                                   
                                    <input type="text" placeholder="Enter State" id="state" name="state" required>

                                     <select name="mailer" id="mailer">
                                   <?php 
                                        $query = "SELECT * FROM product WHERE cat_id='$id'" ;
                                        $sql   = mysqli_query($conn,$query);
                                        while($row=  mysqli_fetch_array($sql)){
                                    ?>
                                            <option value="<?php echo $row['pname']; ?>"><?php echo $row['pname']; ?></option>
                                    <?php }?>
                                    </select>
                                    <button id='submit' type="submit" name="submit"
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
    
            $(document).ready(function(){
                $("#testing li").hide();
                $("#searchfilter").on("keyup", function() {
                        // alert('tes');
                      var value = this.value.toLowerCase().trim();
                        if(value.length==0){
                            
                            $("#testing li").hide();
                            return false;
                        }
                     $("#testing li ").show().filter(function() {
                         return $(this).text().toLowerCase().trim().indexOf(value) == -1;
                      }).hide();
                    
                });
            });
        
        
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
 $(document).ready(function(){

    $('#submit').click(function(){
   
        var name  = $('#name').val();
        var email = $('#email').val();
        var mobile= $('#mobile').val();
        var mailer= $('#mailer').val();
      //  alert();
        if(name!="" && email!="" && mobile!=""  && mailer!=""){
            $.ajax({
                url:  'emailmarcketing_insert.php',
                type: 'POST',
                data:  {
                    name   : name,
                    email  : email,
                    mobile : mobile,
                    mailer : mailer,
                },
                success:function(response){
                    swal({
                        //title: '',
                        text: 'Thank you for submitting  Our team contact you soon!',
                        icon: 'success',
                        button: 'Done!',
                    });

                    alert(response);
                          
                }
            });
  	    };
    });
});
</script>
     <script>
     
function search_product(){

 let svalue =document.getElementById("searchfilter").value;
   $("#product_c").html("");
     $.ajax({
  method: "POST",
  url: "search.php",
  data: { name: svalue},
}).done(function( msg ) {
    $("#product_c").html(msg);
  });

}

   </script>
 
<script>
  function openForm() {
   document.getElementById("myForm").style.display = "block";
 }
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    
