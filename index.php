<?php 
 include('connection.php');
  include('includes/header.php');
    
    if (isset($_POST['submit'])) {
      //print_r($_FILES);die();

      $firstname  =  $_POST['firstname'];
      $email      =  $_POST['email'];
      $subject  =  $_POST['subject'];
      $message      =  $_POST['message'];

    $sql = "INSERT INTO `contact`(`firstname`,`email`,`subject`,`message`) VALUES ('$firstname','$email','$subject','$message')";

     $mysql = mysqli_query($conn,$sql);
   // print_r($sql);die();
   if ($mysql==true) {
   // header('location:.php');
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

<div class="popup">
        <button id="close">&times;</button>
        <h2 style="color: white;">Get A Free Tool</h2>
        <div>
            <form action="" method="POST">
              <div class="row">
                  <div class="col-sm-6" >
                      <label for="fname">First Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  </div>
                  <div class="col-sm-6">
                   <label for="email">Email Id</label>
                   <input type="text" id="email" name="email" placeholder="Your Email Id..">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-6">
                      <label for="subject">Subject</label>
                      <input type="text" id="subject" name="subject" placeholder="Your Subject..">
                  </div>
                  <div class="col-sm-6">
                      <label for="message">Message</label>
                      <input type="text" id="message" name="message" placeholder="Your Message..">
                  </div>
              </div>
              
              <br>
              <br>
              <input name="submit" type="submit" value="Submit">
            </form>
          </div>
          
    </div>
    <!--Script-->
    <script type="text/javascript">
    window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        2000 
    )
    });


    document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
    });
    </script>


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="img/imgg.jpeg" width="100%" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">WE DO FULL-CYCLE SOFTWARE DEVELOPMENT</h5>
                           
                            <h1 class="display-3 text-white mb-md-4">WE DO FULL-CYCLE SOFTWARE DEVELOPMENT</h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/computer1 (2).jpeg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">WE DO FULL-CYCLE SOFTWARE DEVELOPMENT</h5>
                            <h1 class="display-3 text-white mb-md-4">CONSULTANCY SERVICES</h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="img/computer2.jpg" width="100%" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">WE DO FULL-CYCLE SOFTWARE DEVELOPMENT</h5>
                            <h1 class="display-3 text-white mb-md-4">Development of custom software for enterprises.
                            </h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid contact-info">
        <?php 
               $query = "SELECT * FROM contact_us";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
        <div class="row">
            <div class="col-lg-4 p-0">
                <div
                    class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0 pl-3">
                    <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2"><strong style="color:white">Office </strong></h5>
                        <p class="m-0"><strong><?php echo $row['address']; ?></strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div
                    class="contact-info-item d-flex align-items-center bg-secondary text-white py-4 py-lg-0 pl-3">
                    <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2"><b>Email Us</b></h5>
                        <p class="m-0"><strong style="color:black"><?php echo $row['email']; ?> </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div
                    class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2"><strong style="color:white"><strong> Call Us</strong></h5>
                        <p class="m-0"><strong style="color:white"><?php echo $row['contact']; ?></strong></p>
                    </div>
                </div>
            </div>
        </div><?php } ?>

    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                        <h2 class="text-white m-0">Years Experience</h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    
                    <h3 class="text-secondary font-weight-semi-bold text-uppercase mb-3 text-center"><b>Learn About Us</b></h3>
                    <div class="w3-container w3-left w3-animate-zoom">
                    <h2 class="mb-4 section-title">Your Partner for Software Innovation!</h2>
                    </div>
                    <h5 class="text-muted font-weight-normal mb-3">We can help to maintain and modernize your IT
                        infrastructure and solve various infrastructure-specific issues a business may face.</h5>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0"><b> IT Consulting</b> </p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>

                                <p class="text-secondary font-weight-medium m-0"><b> Dedicated Development Team </b></p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0"><b>Highly Professional Staff</b></p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0"><b>100% Satisfaction Guarantee</b></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center pt-4">
                        <a href="" class="btn btn-primary mr-5">Learn More</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/watch?v=FeKu8LN_l5k" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/FeKu8LN_l5k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid bg-service py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <?php 
               $query = "SELECT * FROM sw_feature";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
                <div class="col-lg-6">
                    <h3 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><b>Our Services</b></h3>
                    <h2 class="mb-4 section-title text-white"><?php echo $row['tittle']; ?></h1>
                        <p class="text-white"><?php echo $row['sub_tittle']; ?>
                    </h2>
                    <br>
                    <a href="" class="btn btn-primary mt-3">More Services</a>
                </div>
            <?php }?>

             
                <div class="col-lg-6 pt-5 pt-lg-0">

                    <div class="owl-carousel service-carousel position-relative ">
                        <?php 
               $query = "SELECT * FROM swf_slider";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4" style="height:310px;">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-hotel"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4" ><?php echo $row['tittle']; ?></h5>
                            <p style="color: black;"> <?php echo $row['sub_tittle']; ?></p>
                        </div>
                        <?php } ?>
                        <!-- <div
                            class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-city"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Product Designs</h5>
                            <p style="color: black;"> We help you prototype, test, and validate your ideas through our
                                product design service.<br>
                                <br>

                            </p>
                        </div>
                        <div
                            class="d-flex flex-column align-items-center text-center bg-white rounded overflow-hidden pt-4">
                            <div class="icon-box bg-light text-secondary shadow mt-2 mb-4">
                                <i class="fa fa-2x fa-spa"></i>
                            </div>
                            <h5 class="font-weight-bold mb-4 px-4">Data Analytics</h5>
                            <p style="color: black;"> Digitization must be accompanied by infrastructure that keeps pace
                                with the changing demands...
                                <br>
                                <br>
                            </p>

                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid bg-white">
        <div class="container">
                 <?php 
               $query = "SELECT * FROM whychoose";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
            <div class="row mt-5">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">

                    <h2 class="mb-4 section-title"> <?php echo $row['tittle']; ?></h2>
                    <p class="mb-4"><strong style="color: black;"><?php echo $row['sub_tittle']; ?></strong></p>
                    <!-- <ul class="list-inline">
                        <li>
                            <h5><i class="far fa-check-square text-primary mr-3"></i>10+ Years Expereince</h5>
                        </li>
                        <li>
                            <h5><i class="far fa-check-square text-primary mr-3"></i>Expert Worker</h5>
                        </li>
                        <li>
                            <h5><i class="far fa-check-square text-primary mr-3"></i>Quick Support</h5>
                        </li>
                    </ul> -->
                    <a href="" class="btn btn-primary mt-3">View More</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                         <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                        
                    </div>
                </div>
            </div><?php }?>
        </div>
    </div>
        <br>
    <br>
        <br>
    <!-- Features End -->
    <h2 style="text-align:center">WORKING PROCESS</h2>
    <br>
    <br>
    <!-- Portfolio Start -->
    <div class="container-fluid bg-portfolio py-5">
        <div class="container py-5">
            <div class="row m-0 portfolio-container">
                 <?php 
               $query = "SELECT * FROM workimg";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item pb-3">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img">
                            <a href="admin/<?php echo $row['image']; ?>"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                            <!-- <img class="img-fluid w-100" src="img/computer1 (2).jpeg" alt=""> -->
                        </div>
                        <div class="portfolio-text bg-primary">
                            <h4><strong style="color: white;"><?php echo $row['tittle']; ?></strong></h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-sm btn-secondary m-1" href="">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-sm btn-secondary m-1" href="img/computer1 (2).jpeg"
                                    data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><?php }?>

            </div>
        </div>
    </div>
    </div></p></h2></div></div>
    <!-- Portfolio End -->


    <!-- Team Start -->
    <div class="container-fluid py-4">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">

                    <h2 class="section-title mb-3">Awesome Software Features are available from us </h2>
                </div>

            </div>
            <div class="row">
                
                <div class="col-12">
                     
                    <div class="owl-carousel team-carousel position-relative">
                        <?php 
               $query = "SELECT * FROM swfeature_form";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
                        <div class="team d-flex flex-column text-center rounded overflow-hidden">
                            <div class="position-relative">
                                <div class="team-img">
                                    <a href="<?php echo $row['image']; ?>"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                                </div>
                                <div
                                    class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">

                                </div>
                            </div>
                            <div class="d-flex flex-column bg-primary text-center py-4">

                                <p class="text-white m-0"><?php echo $row['tittle']; ?>
                                </p>
                            </div>
                        </div> <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <div class="container-fluid box">
        <div class="col-lg-12">

                    <h2 class="cntn-box-title">Email marketing is a powerful way to reach out to potential customers and promote your business. Here are some tips for creating effective email marketing content for Beta IT Solution Indore:</h2>
                </div>
        <div class="row point-box">
            <div class="col-md-6">
                <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <div class="number" >
                        <p>1</p>
                    </div>
                    <p>Personalize your emails. Use the recipient's name in the subject line and greeting to make the email feel more personalized.</p>
                    
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number">
                        <p>3</p>
                    </div>
                    <p>Use a clear and compelling subject line. The subject line is the first thing a recipient sees, so make sure it's attention-grabbing and clearly communicates the purpose of the email.</p>
                    
                </div>
                 <div class="emai-box  d-flex"  data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number">
                        <p>5</p>
                    </div>
                    <p>Keep the design simple and easy to read. Use a clean and simple layout that's easy on the eyes and makes it easy for recipients to scan the content.</p>
                    
                </div>
                 <div class="emai-box  d-flex"  data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number">
                        <p>7</p>
                    </div>
                    <p>Use images and videos. Visuals can help grab attention and convey your message more effectively.</p>
                   
                </div>
                 <div class="emai-box  d-flex"  data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number">
                        <p>9</p>
                    </div>
                    <p>Include a call-to-action. Encourage recipients to take a specific action, such as visiting your website or making a purchase.</p>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="emai-box  d-flex"  data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                    <div class="number">
                        <p>2</p>
                    </div>
                    <p>Use segmentation. Target your email campaigns to specific groups of recipients to improve engagement and conversion.</p>
                    
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number">
                        <p>4</p>
                    </div>
                    <p>Use A/B testing. Test different versions of your emails to see which performs better and use the best performing one for your next campaign.</p>
                    
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number">
                        <p>6</p>
                    </div>
                    <p>Include your company's details and location (in this case Indore) in the signature or somewhere visible in the email to make the audience aware of your location and the services you offer.</p>
                    
                </div> 
                 <div class="emai-box  d-flex" data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                     <div class="number">
                        <p>8</p>
                    </div>
                    <p>Use the brand name Beta IT Solution in the subject and in the body of the email to increase brand recognition and recall.</p>
                    
                </div>
                 <div class="emai-box  d-flex" data-aos="fade-left" data-aos-offset="300"data-aos-easing="ease-in-sine">
                      <div class="number">
                        <p>10</p>
                    </div>
                    <p>Please let me know if you have any specific questions about creating email marketing content for Beta IT Solution Indore.</p>
                    
                </div>
                 
            </div>
        </div>
    </div>
    <!--<div class="container">-->
    <!--    <div class="row one">-->
    <!--        <div class="col-md-12">-->
    <!--            <img class="img-fluid" src="admin/upload/img09.jpg">-->
    <!--            <p style="color: black;">Email marketing is a powerful way to reach out to potential customers and promote your business. Here are some tips for creating effective email marketing content for Beta IT Solution Indore:</p>-->
    <!--        </div>-->
    <!--    </div>    -->
    <!--    <div class="row two">    -->
    <!--        <div class="col-md-12 ">-->
    <!--            <p style="color: black;">Personalize your emails. Use the recipient's name in the subject line and greeting to make the email feel more personalized.</p>-->
    <!--        </div>-->
    <!--    </div>  -->
    <!--    <div class="row one">-->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Use a clear and compelling subject line. The subject line is the first thing a recipient sees, so make sure it's attention-grabbing and clearly communicates the purpose of the email.</p>-->
    <!--        </div>-->
    <!--    </div> -->
    <!--    <div class="row two"> -->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Use images and videos. Visuals can help grab attention and convey your message more effectively.</p>-->
    <!--        </div>-->
    <!--    </div>    -->
    <!--    <div class="row one">-->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Include a call-to-action. Encourage recipients to take a specific action, such as visiting your website or making a purchase.</p>-->
    <!--        </div>-->
    <!--    </div> -->
    <!--    <div class="row two"> -->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Optimize your emails for mobile. Many people read emails on their smartphones, so make sure your emails look good and are easy to read on a small screen.</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row one">-->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Use segmentation. Target your email campaigns to specific groups of recipients to improve engagement and conversion.</p>-->
    <!--        </div> -->
    <!--    </div>  -->
    <!--    <div class="row two"> -->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Use A/B testing. Test different versions of your emails to see which performs better and use the best performing one for your next campaign.</p>-->
    <!--        </div>-->
    <!--    </div>    -->
    <!--    <div class="row one">-->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Include a call-to-action. Encourage recipients to take a specific action, such as visiting your website or making a purchase.</p>-->
    <!--        </div>-->
    <!--    </div>   -->
    <!--    <div class="row two">-->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Include your company's details and location (in this case Indore) in the signature or somewhere visible in the email to make the audience aware of your location and the services you offer.</p>-->
    <!--        </div>-->
    <!--    </div>   -->
    <!--    <div class="row one">-->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Use the brand name Beta IT Solution in the subject and in the body of the email to increase brand recognition and recall.</p>-->
    <!--        </div>-->
    <!--    </div>    -->
    <!--    <div class="row two">-->
    <!--        <div class="col-md-12">-->
    <!--            <p style="color: black;">Please let me know if you have any specific questions about creating email marketing content for Beta IT Solution Indore.</p>-->
    <!--        </div>-->
    <!--    </div>    -->
       
    <!--    </div>-->
<!--            <div class="col-md-6">-->
<!--<p style="color: black;">Use a clear and compelling subject line. The subject line is the first thing a recipient sees, so make sure it's attention-grabbing and clearly communicates the purpose of the email.</p></div>-->
<!--<div class="container col-md-6">-->
<!--<p style="color: black;">Use images and videos. Visuals can help grab attention and convey your message more effectively.</p></div></div>-->
<!--<div class="row">-->
<!--<div class="container col-md-6">-->
<!--<p style="color: black;">Include a call-to-action. Encourage recipients to take a specific action, such as visiting your website or making a purchase.</p></div>-->
<!--<div class="container col-md-6">-->
<!--<p style="color: black;">Optimize your emails for mobile. Many people read emails on their smartphones, so make sure your emails look good and are easy to read on a small screen.</p></div></div>-->
<!--<div class="row">-->
<!--<div class="container col-md-6">-->
<!--<p style="color: black;">Use segmentation. Target your email campaigns to specific groups of recipients to improve engagement and conversion.</p></div>-->
<!--<div class="container col-md-6">-->
<!--<p style="color: black;">Use A/B testing. Test different versions of your emails to see which performs better and use the best performing one for your next campaign.</p></div></div>-->
<!--<div class="row">-->
<!--<div class="container col-md-6">-->
<!--<p style="color: black;">Include your company's details and location (in this case Indore) in the signature or somewhere visible in the email to make the audience aware of your location and the services you offer.</p></div>-->
<!--<div class="container col-md-6">-->
<!--<p style="color: black;">Use the brand name Beta IT Solution in the subject and in the body of the email to increase brand recognition and recall.</p></div></div>-->
<!--<div class="container col-md-6 ">-->
<!--<p style="color: black;">Please let me know if you have any specific questions about creating email marketing content for Beta IT Solution Indore.</p>-->
<!--</div>-->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 pt-lg-5 pb-5 text-center">
                    <h2 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><b>Testimonial</b> </h2>
                    <h3 class="section-title-testimonial text-white mb-5">What Our Clients Say!</h3>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <?php 
               $query = "SELECT * FROM testmonial";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex justify-content-center mb-3">
                                <a href="<?php echo $row['image']; ?>"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                                <div class="ml-3">
                                    <h5 class="text-primary">Client Name</h5>
                                    <strong><?php echo $row['fullname']; ?></strong>
                                </div>
                            </div>
                            <p><?php echo $row['massage']; ?></p>
                        </div>
                    <?php }?>
                        
                    </div>
                </div>
                <div class="" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->

    <!-- Blog End -->


    <?php include('includes/fooder.php'); ?>