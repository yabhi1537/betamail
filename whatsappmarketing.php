<?php include('includes/header.php');
      include('connection.php');
 ?>
 <?php 
    
    if (isset($_POST['submit'])) {
      //print_r($_FILES);die();

      $name       =  $_POST['name'];
      $email      =  $_POST['email'];
      $mobile     =  $_POST['mobile'];
      $mailer     =  $_POST['mailer'];

    $sql = "INSERT INTO `mailer`(`name`,`email`,`mobile`,`mailer`) VALUES ('$name','$email','$mobile','$mailer')";

     $mysql = mysqli_query($conn,$sql);
 //print_r($sql);die();
   if ($mysql==true) {
    //header('location:emailmarcketing.php');
    echo '<script type="text/javascript">alert("Succesfully Data Inserted")</script>';
    echo "<script>location.href='whatsappmarketing.php'</script>";
    }else{

        //header('location:workimg.php');
    echo '<script type="text/javascript">alert("Data not Inserted")</script>';
    echo "<script>location.href='whatsappmarketing.php'</script>";
   }

    }

  ?>
<!-- Page Header Start -->
    <link rel="stylesheet" href="https://easifymarketing.co.in/inc/themes/frontend/wimax/assets/fonts/flags/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="css/stylewtsapp.css">
    <!-- <link rel="stylesheet" href="https://easifymarketing.co.in/inc/themes/frontend/wimax/assets/css/style.css"> -->

<div class="container-fluid bg-primary">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">WHATSAPP MARKETING
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">WHATSAPP MARKETING</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Detail Start -->
    <div class="container-fluid">
        <div class="container">
                         <?php 
               $query = "SELECT * FROM whatsappmarketing";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h3 class="text-secondary text-uppercase font-weight-medium mb-3"><b></b></h3>
                        <h2 class="mb-4"><?php echo $row['tittle'];?>  </h2>
                            
                </div>
            </div><?php } ?>
        </div>
    </div>
    
  <!-- Detail End -->

 
<!-- Services Start -->

  <style>
        
    .textColor{
    color:black;
        
    }
    </style>
   <!--<div class='container mt-3'>-->
   <!--     <div class='row'>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Sure, I'd be happy to help with your WhatsApp marketing content. Here are a few tips for creating effective content for WhatsApp:</p>-->
   <!--         </div>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Keep it short and sweet. WhatsApp is a mobile platform, so people are more likely to read and engage with short, concise messages.</p>-->
   <!--         </div>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Use visuals. Images and videos can help grab attention and convey your message more effectively.</p>-->
   <!--         </div>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Personalize your messages. People are more likely to engage with content that feels personalized to them.</p>-->
   <!--         </div>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Use calls to action. Encourage people to take a specific action, such as visiting your website or making a purchase.</p>-->
   <!--         </div>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Use WhatsApp features. WhatsApp offers a variety of features, like polls and quizzes, that you can use to create interactive content.</p>-->
   <!--         </div>-->
   <!--           <div class='col-md-6'>-->
   <!--             <p class='textColor'>Track your results. Use WhatsApp analytics to track engagement with your content and see what's working and what's not.</p>-->
   <!--         </div>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Be consistent with your message. Try to stick to one main message or theme per WhatsApp message and keep the message consistent with your overall marketing strategy.</p>-->
   <!--         </div>-->
   <!--         <div class='col-md-6'>-->
   <!--             <p class='textColor'>Please let me know if you have any specific questions about WhatsApp marketing content.</p>-->
   <!--         </div>-->
   <!--     </div>-->
   <!-- </div>-->
   <div class="container-fluid box ">
        <div class="col-lg-12">

                    <h2 class="cntn-box-title">Sure, I'd be happy to help with your WhatsApp marketing content. Here are a few tips for creating effective content for WhatsApp:</h2>
                </div>
        <div class="row point-box">
            <div class="col-md-6">
                 <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <div class="number" >
                        <p>1</p>
                    </div>
                    <p>Keep it short and sweet. WhatsApp is a mobile platform, so people are more likely to read and engage with short, concise messages.</p>
                </div>
                   <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                   <div class="number" >
                        <p>3</p>
                    </div>
                    <p>Use visuals. Images and videos can help grab attention and convey your message more effectively.</p>
                </div>
                  <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number" >
                        <p>5</p>
                    </div>
                    <p>Personalize your messages. People are more likely to engage with content that feels personalized to them.</p>
                </div>
                   <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number" >
                        <p>7</p>
                    </div>
                    <p>Use calls to action. Encourage people to take a specific action, such as visiting your website or making a purchase.</p>
                </div>
                 
            </div>
            <div class="col-md-6">
                <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number">
                        <p>2</p>
                    </div>
                    <p>Use WhatsApp features. WhatsApp offers a variety of features, like polls and quizzes, that you can use to create interactive content.</p>
                </div>
               <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number">
                        <p>4</p>
                    </div>
                    <p>Track your results. Use WhatsApp analytics to track engagement with your content and see what's working and what's not.</p>
                </div>
                 <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number">
                        <p>6</p>
                    </div>
                    <p>Be consistent with your message. Try to stick to one main message or theme per WhatsApp message and keep the message consistent with your overall marketing strategy.</p>
                </div>
                <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number">
                        <p>8</p>
                    </div>
                    <p>Please let me know if you have any specific questions about WhatsApp marketing content.</p>
                </div>
                 
            </div>
        </div>
    </div>
    <div class="breadcrumb-area bg-img bg-black-overlay section_padding_100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-9 col-xl-6">
          <div class="breadcrumb-content text-center">
            <h2 style="color:white">Choose your plan</h2>
            <p style="color:white">For 5 years we have been developing for providing better services</p>
            <div class="plan-option">
              <h3 style="color:white">Annually</h3>
              <!--<label class="switch pricing-tab-switcher">-->
              <!--    <input type="checkbox">-->
              <!--    <span class="slider round"></span>-->
              <!--</label>-->
              <!--<p style="color:black">Monthly</p>-->
        
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Price and Plans Area-->
  <section class="price_plan_area section_padding_130_80" id="pricing">
    <div class="container">
      
      
      <div class="row justify-content-center">
        <!-- Single Price Plan Area-->
              <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s">
            <div class="title">
                          <h3>Basic</h3>
              <p>Pick great plan for you</p>
              <div class="line"></div>
            </div>
            <div class="price">
              <div class="annual_price">
                  <h4 class="price">₹7000<span class="fw-4 fs-18">/month</span></h4>
              </div>
              <div class="monthly_price">
                  <h4 class="price">$90<span class="fw-4 fs-18">/Annually</span></h4>
              </div>
              
            </div>
            <div class="">
                
                <div class="plan-group">
                  <div class="text-large">Add up to 3 social accounts</div>
                <div class="small">3 social account on each platform </div>
                </div>
            </div>
            <div class="description">
              
                            
                                    <p><h6>Whatsapp features</h6></p>
                    
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>50000 message/month</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot with media</span></p>
                           <p><h6>Advance features</h6></p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Spintax support</span>
              </p>
              <p>
                <i class="lni-check-mark-circle"></i>
                <span>Watermark support</span>
              </p>
              <p>
                <i class="lni-check-mark-circle"></i>
                <span>Image Editor support</span>
              </p>
              <p>
            <i class="lni-check-mark-circle"></i>
                              
                <span>Cloud import: Google Drive, Dropbox, One Drive</span>
              </p>
              <p class="have">
                                <i class="lni-check-mark-circle"></i>
                              <span>File type: Photo, Video</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Storage: 100MB</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Max. file size: 100MB</span>
              </p>
            </div>
            <div class="button" onclick="openForm()"><a class="btn wimax-btn btn-2 btn-payment">Get Started</a></div>
            <!--<button class="open-button" ><b>Buy Now</b></button>-->
                        <BR>
                     <div class="form-popup" id="myForm1">
                       <form action="" class="form-container" method="POST">
                          <h3 style="text-align: center;">If you'd like to buy a mailer, please get in touch with us.</h3>
                         
                          <input type="text" placeholder="Enter Name" name="name" required>
                      
                          <br>
                          <input type="text" placeholder="Enter email id" name="email" required>
                          <br>
                          
                          <input type="text" placeholder="Enter mobile no." name="mobile" required>
                          
                          <label for="mailer">Choose your plan</label>
                          <select name="mailer" id="mail">
                           
                            <option value="Basic">Basic</option>
                            <option value="Standard">Standard</option>
                            <option value="Permium">Permium</option>
                            <option value="Starter">Starter</option>
                            <!--<option value="Sendblaster">Sendblaster</option>-->
                            <!--<option value="Atomic Mailler">Atomic Mailler</option>-->
                            <!--<option value="Gammadyne Mailer">Gammadyne Mailer</option>-->
                          </select>
                          <!--<a href="" class="btn btn-saanvi mr-3 d-none d-lg-block"><strong>Submit</strong> </a>-->
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
                      
                    
            <!--<div class="button"><a class="btn wimax-btn btn-2 btn-payment" href="https://easifymarketing.co.in/payment/index/8c0e2081734e240051ba3f9e1dee9d0d/1" data-tmp="https://easifymarketing.co.in/payment/index/8c0e2081734e240051ba3f9e1dee9d0d/2">Get Started</a></div>-->
          </div>
        </div>
  
              <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s">
            <div class="title">
                          <span>Popular</span>
                          <h3>Standard</h3>
              <p>Pick great plan for you</p>
              <div class="line"></div>
            </div>
            <div class="price">
              <div class="annual_price">
                  <h4 class="price">₹8500<span class="fw-4 fs-18">/month</span></h4>
              </div>
              <div class="monthly_price">
                  <h4 class="price">$180<span class="fw-4 fs-18">/Annually</span></h4>
              </div>
            </div>
            <div class="">
                
                <div class="plan-group">
                  <div class="text-large">Add up to 5 social accounts</div>
                <div class="small">5 social account on each platform </div>
                </div>
            </div>
            <div class="description">
              
                            
                                    <p><h6>Whatsapp features</h6></p>
                    
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>200000  message/month</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot with media</span>
                              
                            </p>
                          
                                          
                    
                                
                
              
              
              <p><h6>Advance features</h6></p>
  
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Spintax support</span>
              </p>
              <p>
                <i class="lni-check-mark-circle"></i>
                <span>Watermark support</span>
              </p>
              <p>
                <i class="lni-check-mark-circle"></i>
                <span>Image Editor support</span>
              </p>
                
              <p>
                                <i class="lni-check-mark-circle"></i>
                              
                <span>Cloud import: Google Drive, Dropbox, One Drive</span>
              </p>
              <p class="have">
                                <i class="lni-check-mark-circle"></i>
                              <span>File type: Photo, Video</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Storage: 100MB</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Max. file size: 10MB</span>
              </p>
            </div>
            <!--<div class="button"><a class="btn wimax-btn btn-2 btn-payment" href="https://easifymarketing.co.in/payment/index/c10f887a5185198a77094ce03f7114b2/1" data-tmp="https://easifymarketing.co.in/payment/index/c10f887a5185198a77094ce03f7114b2/2">Get Started</a></div>-->
            <div class="button" onclick="openForm()"><a class="btn wimax-btn btn-2 btn-payment">Get Started</a></div>
          </div>
        </div>
  
              <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s">
            <div class="title">
                          <h3>Permium</h3>
              <p>Pick great plan for you</p>
              <div class="line"></div>
            </div>
            <div class="price">
              <div class="annual_price">
                  <h4 class="price">₹10000<span class="fw-4 fs-18">/month</span></h4>
              </div>
              <div class="monthly_price">
                  <h4 class="price">$316<span class="fw-4 fs-18">/Annually</span></h4>
              </div>
            </div>
            <div class="">
                
                <div class="plan-group">
                  <div class="text-large">Add up to 7 social accounts</div>
                <div class="small">7 social account on each platform </div>
                </div>
            </div>
            <div class="description">
              
                            
                                    <p><h6>Whatsapp features</h6></p>
                    
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>2500000 message/month</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot with media</span>
                              
                            </p>
                          
                                          
                    
                                
                
              
              
              <p><h6>Advance features</h6></p>
  
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Spintax support</span>
              </p>
              <p>
                <i class="lni-check-mark-circle"></i>
                <span>Watermark support</span>
              </p>
              <p>
                <i class="lni-check-mark-circle"></i>
                <span>Image Editor support</span>
              </p>
                
              <p>
                                <i class="lni-check-mark-circle"></i>
                              
                <span>Cloud import: Google Drive, Dropbox, One Drive</span>
              </p>
              <p class="have">
                                <i class="lni-check-mark-circle"></i>
                              <span>File type: Photo, Video</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Storage: 100MB</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Max. file size: 10MB</span>
              </p>
            </div>
            <!--<div class="button"><a class="btn wimax-btn btn-2 btn-payment" href="https://easifymarketing.co.in/payment/index/6ffde698600b5eca3873c6f60a62782e/1" data-tmp="https://easifymarketing.co.in/payment/index/6ffde698600b5eca3873c6f60a62782e/2">Get Started</a></div>-->
            <div class="button" onclick="openForm()"><a class="btn wimax-btn btn-2 btn-payment">Get Started</a></div>
          </div>
        </div>
  
              <div class="col-12 col-sm-8 col-md-6 col-lg-4">
          <div class="single_price_plan wow fadeInUp" data-wow-delay="0.2s">
            <div class="title">
                          <h3>Starter</h3>
              <p>Pick great plan for you</p>
              <div class="line"></div>
            </div>
            <div class="price">
              <div class="annual_price">
                  <h4 class="price">₹5000<span class="fw-4 fs-18">/month</span></h4>
              </div>
              <div class="monthly_price">
                  <h4 class="price">$7000<span class="fw-4 fs-18">/Annually</span></h4>
              </div>
            </div>
            <div class="">
                
                <div class="plan-group">
                  <div class="text-large">Add up to 1 social accounts</div>
                <div class="small">1 social account on each platform </div>
                </div>
            </div>
            <div class="description">
              
                            
                                    <p><h6>Whatsapp features</h6></p>
                    
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>50000 message/month</span>
                              
                            </p>
                          
                                              
                <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-close"></i>
                              
                                                          <span>Chat with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Autoresponder with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Bulk messaging with media</span>
                              
                            </p>
                          
                                              
                                                    <p>
                                                            <i class="lni-check-mark-circle"></i>
                              
                                                          <span>Chatbot with media</span>
                              
                            </p>
                          
                                          
                    
                                
                
              
              
              <p><h6>Advance features</h6></p>
  
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Spintax support</span>
              </p>
              <p>
                <i class="lni-close"></i>
                <span>Watermark support</span>
              </p>
              <p>
                <i class="lni-close"></i>
                <span>Image Editor support</span>
              </p>
                
              <p>
                                <i class="lni-close"></i>
                              
                <span>Cloud import: Unsupported</span>
              </p>
              <p class="have">
                                <i class="lni-check-mark-circle"></i>
                              <span>File type: Photo</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Storage: 0MB</span>
              </p>
              <p class="have">
                <i class="lni-check-mark-circle"></i>
                <span>Max. file size: 0MB</span>
              </p>
            </div>
            <!--<div class="button"><a class="btn wimax-btn btn-2 btn-payment" href="https://easifymarketing.co.in/payment/index/86f9ce11b458fcc9588e397a60a0e5e9/1" data-tmp="https://easifymarketing.co.in/payment/index/86f9ce11b458fcc9588e397a60a0e5e9/2">Get Started</a></div>-->
            <div class="button" onclick="openForm()"><a class="btn wimax-btn btn-2 btn-payment">Get Started</a></div>
          </div>
        </div>
  
            </div>
        </div>
  </section>

<!-- Services End -->
    </div>
</div>
<!-- Services End -->

   
    <style>
    h1{
        font-size:10px;
    }
/*button{*/
        
        /*height: 40px;*/
/*        width: 100px;*/
/*        border-radius: 8%;*/
/*    background-color: #12aa04;*/
/*    color: white;*/
/*    }*/
/*button:hover{*/
/*        background-color: rgb(47, 216, 61);*/
/*        color: white;*/
/*        height: 40px;*/
/*        width: 100px;*/
/*        border-radius: 8%;*/
/*        }*/
 .form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;  
  border: 3px solid #dddcdc;
  z-index: 99;
  
}
button.open-button.email-button {
    height: 30px;
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
  background-color: #12aa04;
  color: white;
  padding: 16px 20px;
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
/*.form-container .btn:hover, .open-button:hover {*/
/*  opacity: 4;*/
/*  height: 50px;*/
/*  width: 100px;*/
/*  border-radius: 8%;*/
/*  background-color: #12aa04;*/
/*  color: white;*/
 
/*}*/
/*@media screen and (max-width: 999px) {*/
/*    .form-container{*/
/*    width: 100%;*/
/*    margin-top: 0;*/
/*  }*/
/*}*/
/*@media screen and (max-width: 1150px) {*/
/*    .form-container{*/
/*    width: 100%;*/
/*    margin-top: 0;*/
/*    font-size: 12px;*/
/*  }*/
/*}*/

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