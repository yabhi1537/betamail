<?php include('includes/header.php');
       include('connection.php');
 ?>


<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">E-MAIL MARKETING
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">E-MAIL MARKETING</a>
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
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/ourservices.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h4 class="text-secondary text-uppercase font-weight-medium mb-3"><b> Learn E-Mail Marketing </b></h4>
                    <h2 class="mb-4">Boost your business with bulk email</h1>
                    <h4 class="font-weight-medium font-serif mb-4"> The Right Content Will Help You Reach Your Target Audience</h2>
                    <p class="mb-2">That is only the tip of the iceberg. With the variety of opportunities that web email marketing offers, your business will be on its way to increasing their conversion rate.
                    </p>
                    <p class="mb-2">If you're still unsure about the importance of email marketing for your brand, here are six more reasons why you should invest in an email marketing service:</p>
                    <p class="mb-2"></p>
                    <p class="mb-2"></p>
                    <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Build Customer
Loyalty</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Connect With
Different Audiences
 </p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">
Expand Your
Business Reach</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Save Time and Effort</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Loads quickly</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Track Your
Analytics

 </p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">
Test Email Campaigns
and Drive Strong Results
 </p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Track Your
Analytics</p>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
<!-- Detail End -->
<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <h1 class="display-4 text-center mb-5">Performance Audit and Strategy for Email Marketing</h1>
        <h6 class="font-weight-bold m-0">Email marketing strategies must adapt as trends emerge and go Our email marketing company performs B2C and B2B email marketing audits to determine factors that influence your marketing success and pinpoint issues that disrupt your email marketing strategy. Our email services include:</h6>
        <br>
        
        <div class="row">
             <?php 
                   $query = "SELECT * FROM emailmarketing";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                       //die();
                ?>
            <div class="col-lg-4 col-md-4 pb-1">
                <div class=" emial-mkt-col flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" >
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" >

                       
                        <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                    </div>
                    <h4 class="font-weight-bold m-0"><?php echo $row['massage'];?></h4>
                    
                </div>
            </div><?php }?>
<!--             <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                       <img class="w-100" src="img/img72.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Technical Review

                    </h4>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                      <img class="w-100" src="img/img73.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Data Review
                    </h4>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <img class="w-100" src="img/img74.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Program Review</h4>
                
                    
                </div>
            </div> -->
        </div>
    </div>
<!--     <div class="row">
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">

                       
                        <img class="w-100" src="img/img75.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Recommendations</h4>
        
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                       <img class="w-100" src="img/img76.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m">Campaign Tracking and Reporting
                    </h4>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                      <img class="w-100" src="img/img77.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Brand Guidelines and Asset Coordination
                    </h4>
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <img class="w-100" src="img/img78.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Ongoing Management and Optimization</h4>
            
                    
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- Services End -->


   <?php include('includes/fooder.php'); ?>