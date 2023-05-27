<?php include('includes/header.php');
      include('connection.php');
 ?>
 <?php 
    
    if (isset($_POST['submit'])) {
      //print_r($_FILES);die();

      $name    =  $_POST['name'];
      $email   =  $_POST['email'];
      $subject =  $_POST['subject'];
      $message =  $_POST['message'];

    $sql = "INSERT INTO `contact`(`firstname`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";

     $mysql = mysqli_query($conn,$sql);
    //print_r($sql);die();
   if ($mysql==true) {
   
        echo '<script type="text/javascript">alert("Your message has been sent.")</script>';
        echo "<script>location.href='contact.php'</script>";
    }else{

        //header('location:.php');
        echo '<script type="text/javascript">alert("Data not Inserted")</script>';
        echo "<script>location.href='contact.php'</script>";
   }

    }

  ?>


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h4 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Contact Us</h4>
                    <h2 class="section-title mb-3">Contact Us For  Services</h2>
                </div>
                <div class="col-lg-6">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <!-- <div id="success"></div> -->
                        <form action="" method="POST" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" name="name"  placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4 mt-2 mb-2" name="email"  placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" name="subject"  placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" name="submit" type="submit" >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.1444752250914!2d75.85755241458047!3d22.685665034528913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fda8e326af83%3A0xc72287baed43471a!2sBeta%20IT%20Solution!5e0!3m2!1sen!2sin!4v1653989567951!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include('includes/fooder.php'); ?>