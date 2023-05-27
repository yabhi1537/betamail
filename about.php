<?php include('includes/header.php');
      include('connection.php');
 ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white"> About Us </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">About</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                        <h2 class="text-white m-0">Years Experience</h2>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <h3 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><b>Learn About Us</b></h3>
                    <h2 class="mb-4 section-title">Your Partner for Software Innovation!</h2>
                    <h5 class="text-muted font-weight-normal mb-3">We can help to maintain and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.</h5>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">IT Consulting </p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                
                                <p class="text-secondary font-weight-medium m-0">Dedicated Development Team</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Highly Professional Staff</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">100% Satisfaction Guarantee</p>
                            </div>
                        </div>
                    </div>
            
                    <div class="d-flex align-items-center pt-4">
                        <a href="" class="btn btn-primary mr-5">Learn More</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
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
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    <!-- Features Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
                <?php 
               $query = "SELECT * FROM whychoose";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h2 class="text-secondary font-weight-semi-bold text-uppercase mb-3"><b><?php echo $row['tittle'];?></b></h2>
                    
                    <p class="mb-4"><?php echo $row['sub_tittle'];?>

                    </p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h2 class="text-secondary mb-2" data-toggle="counter-up">225</h2>
                            <h6 class="font-weight-semi-bold mb-sm-4">Expert Worker
                            </h6>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="text-secondary mb-2" data-toggle="counter-up">1050</h2>
                            <h6 class="font-weight-semi-bold mb-sm-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h2 class="text-secondary mb-2" data-toggle="counter-up">2500</h2>
                            <h6 class="font-weight-semi-bold mb-sm-4">Quick Support
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" style="object-fit: cover;" src="admin/<?php echo $row['image']; ?>" ></a><!-- <img class="position-absolute w-100 h-100" src="img/ourservices.jpg" > -->
                    </div>
                </div>
            </div><?php } ?> 
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
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
                               <img class="img-fluid" src="admin/<?php echo $row['image']; ?>" >
                                <div class="ml-3">
                                    <h5 class="text-primary">Client Name</h5>
                                    <strong><?php echo $row['fullname']; ?></strong>
                                </div>
                            </div>
                            <p><?php echo $row['massage']; ?></p>
                        </div><?php } ?>
                       <!--  <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-2.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Client Name</h5>
                                    <strong>Aatvik</strong>
                                </div>
                            </div>
                            <p>When our own skills did not manage to get where we wanted, IDTS took care of the rest. The expertize, customer service and "follow up" we experienced from BETA IT Solution were simply flawless.</p>
                        </div> -->
                        <!-- <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="img/testimonial-3.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Client Name</h5>
                                    <strong>Hritvik</strong>
                                </div>
                            </div>
                            <p>We have been using BETA IT Solution' service for the last four months, the software and service provided was commending and quick.</p>
                        </div> -->
                    </div>
                </div>
                <div class="" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


   <?php include('includes/fooder.php'); ?>
  
