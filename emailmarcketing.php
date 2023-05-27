<?php include('includes/header.php');
       include('connection.php');
 ?>

<style>
    
    button.swal-button.swal-button--confirm {
    position: relative;
    left: -168px;
}
    
</style>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Page Header Start -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">E-MAIL SMTP SERVSR SETUP
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">E-MAIL SMTP SERVER SETUP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 image">
                    <img class="img-fluid" src="img/ourservices.jpg" alt="">
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 pl-lg-5">
                    <h4 class="text-secondary text-uppercase font-weight-medium mb-3"><b> Learn E-Mail SMTP Server Setup </b></h4>
                    
                    <h2 class="mb-4 contnt">Are you looking to boost your sales and reach a larger audience? Look no further than our email marketing services.</h1>
                    <h4 class=" mb-2 contnt1"> Our team of experts will work with you to create personalized and effective email campaigns that will drive more traffic to your website and increase conversions. We'll segment your email list to ensure that each message is tailored to the specific interests of your subscribers, and we'll use data and analytics to constantly improve the performance of your campaigns.</h2
                    
                    
              
                  
                 
                
             
      </div>   
      </div>
                 <div class="row">
                     <div class="headng">
                         <p class="mb-2">Don't miss out on this opportunity to take your sales to the next level. Contact us today to learn more and get started.
                         P.S. Sign up now and receive a 10% discount on your first campaign.</p>
                     </div>
                        
                    <div class="col-sm-6 pt-3">
                         <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class=" font-weight-medium m-0">Our services include:</p>
                        </div>
                            
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class=" font-weight-medium m-0">List segmentation and targeting
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class="font-weight-medium m-0">
                                Customized email design and content</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class=" font-weight-medium m-0">A/B testing to optimize results</p>
                        </div>
                    </div>
              </div>
                <div class="row">
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class="font-weight-medium m-0">Detailed analytics and reporting</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class=" font-weight-medium m-0">Track Your Analytics

                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class="font-weight-medium m-0">
                                Test Email Campaigns
                                and Drive Strong Results
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check mr-2"></i>
                            <p class=" font-weight-medium m-0">Track Your Analytics</p>
                        </div>
                    </div>
                </div>
                
               
        </div>

<!-- Detail End -->
<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <h1 class="display-4 text-center mb-5"><strong style="font-size: 43px;">Bulk Mail Sending Tools</strong></h1>
        <div class="row">
             <?php 
                   $query = "SELECT * FROM bulkemailsending";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>
            <div class="col-lg-4 col-md-3 pb-1">
           
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 385px;">
                    <div class="mailsec-icons d-inline-flex align-items-center justify-content-center mb-1" style="width:90px; height:90px;">
                        <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                    </div>
                    <h5 class="font-weight-bold m-0"><?php echo $row['tittle']; ?></h5>
                    <p><?php echo $row['sub_tittle']; ?></p>
                    <div class='row'>
                        <div class='col-md-6'>
                            <button class="btn btn-primary btn-sm" type='button' onclick="openForm()"><b>Bye Now</b></button>
                            
                        </div>
                         <div class='col-md-6'>
                             <button class="btn btn-primary btn-sm"><b> Rs.<?php echo $row['price']  ?></b></button>
                        </div>
                         <div class='col-md-12'>
                             <a href='<?php echo $row['pdf'] ?>' class="btn btn-primary btn-sm" download>Download</a>
                        </div>
                    </div>
                    
                   
                </div>
            </div><?php }?>
            
            
            <div class="form-popup" id="myForm1">
                       <form action="" id="myform" class="form-container" method="POST">
                          <h3 style="text-align: center;">If you'd like to buy a mailer, please get in touch with us.</h3>
                         
                          <input type="text" placeholder="Enter Name" name="name" id="name" required>
                      
                          <br>
                          <input type="text" placeholder="Enter Email" name="email" id="email" required>
                          <br>
                          
                          <input type="text" placeholder="Enter Mobile no." name="mobile" id="mobile" required>
                          <!--<label for="mailer">Select Mailer</label>-->
                  
                          <select name="mailer" id="mailer">
                                   <?php 
                                        $query = "SELECT * FROM bulkemailsending";
                                        $sql   = mysqli_query($conn,$query);
                                        while($row= mysqli_fetch_assoc($sql)){
                                    ?>
                            <option value="<?php echo $row['tittle']; ?>"><?php echo $row['tittle']; ?></option>
                            <!--<option value="Ab  Bulk Mailer">Ab  Bulk Mailer</option>-->
                            <!--<option value="Ultramailer">Ultramailer</option>-->
                            <!--<option value="Max Mailer">Max Mailer</option>-->
                            <!--<option value="Python Mailer">Python Mailer</option>-->
                            <!--<option value="Sendblaster">Sendblaster</option>-->
                            <!--<option value="Atomic Mailler">Atomic Mailler</option>-->
                            <!--<option value="Gammadyne Mailer">Gammadyne Mailer</option>--> <?php }?>
                          </select>
                         
                          <button type="button" name="submit" id="submit" class="btn-whatsapp-submit"><strong>Submit</strong></button>
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

</div>
</BR></div></div></div></div></div></h4></h2></div></div></div></div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function openForm() {
   document.getElementById("myForm").style.display = "block";
 }
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script>
    
 $(document).ready(function(){

    $("#submit").click(function(){
   
        var name  = $('#name').val();
        var email = $('#email').val();
        var mobile= $('#mobile').val();
        var mailer= $('#mailer').val();
        
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
                            //alert(response);
                            swal({
                                 //title: "",
                                 text: "Thank you for submitting  Our team contact you soon!",
                                 icon: "success",
                                 button: "Done!",
                                });

                          
                        }
                    });
  	     };
  });
});
</script>


<!-- Services End -->

<style>
    h1{
        font-size:10px;
    }
.button-bulkmail{
        
    /*height: 40px;*/
    height: 27px;
    width: 63%;
    border-radius: 15%;
    background-color: #12aa04;
    color: white;
    margin-bottom: 6px !important;
    }
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;  
  border: 3px solid #dddcdc;
  z-index: 9;
}
.btn-whatsapp-submit{
 background-color: #3b3e34;
  color: white;
  height: 45px;
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
 height: 45px;
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
  height: 45px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}


<!--button:hover{-->
<!--        background-color: rgb(47, 216, 61);-->
<!--        color: white;-->
<!--        height: 40px;-->
<!--        width: 100px;-->
<!--        border-radius: 8%;-->
<!--        }-->
.email-button {
       height: 30px;
       margin-left: -30px";
       margin-bottom: 20px !important;
       border-radius: 5px;
    }
<!--button {-->
<!--    height: 30px;-->
<!--    width: 63%;-->
<!--    margin-top: 5px;-->
<!--    border-radius: 27%;-->
<!--    background-color: #12aa04;-->
<!--    color: white;-->
<!--}-->

/* Add styles to the form container */

.form-container {
  max-width: 450px;
  padding: 10px;
  background-color: rgb(255, 255, 255);
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #241d1d;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: rgba(255, 30, 30, 0.925);
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 4;
  height: 50px;
  width: 100px;
  border-radius: 8%;
  background-color: #12aa04;
  color: white;
 
}
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
         document.getElementById("myForm1").style.display = "block";
                      }
                      
     function closeForm() {
         document.getElementById("myForm1").style.display = "none";
                      }
</script>


   <?php include('includes/fooder.php'); ?>
   