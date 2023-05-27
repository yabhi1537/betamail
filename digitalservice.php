<?php include('includes/header.php'); 
      include('connection.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">DIGITAL MARKETING

                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.html">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="digitalservice.html">DIGITAL MARKETING
                        </a>
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
                    <img class="img-fluid" src="img/digital.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h4 class="text-secondary text-uppercase font-weight-medium mb-3">Learn Digital Marketing</h4>
                    <h2 class="mb-4">Growth driven by digital marketing services</h2>
                    <h4 class="font-weight-medium font-serif mb-4">Engage Your Target Customers at the Right Time with the Right Platform </h4>
                    <p class="mb-2">At a low cost, digital marketing services give businesses of all sizes the opportunity to market their brand 24/7. Digital marketing companies help startups, medium-sized businesses, and multi-location companies reach their target customers, regardless of time zone differences or location, by expanding their niche market reach.
                    </p>
                    <p class="mb-2">The best way to reach your prospects and retain existing customers is by hiring an internet marketing agency. As long as your business has a strong digital presence, you can count on your customers to find you.</p>
                    <p class="mb-2">As a digital marketing company since 2005, we have partnered with hundreds of companies in the United States to help them reach their conversion goals. We have provided a variety of digital marketing services to our clients and generated the following results:</p>
                    <p class="mb-2"></p>
                    <div class="row">
                        
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
        <h1 class="display-4 text-center mb-5">BETA IT Solution Digital Marketing Services</h1>
        <h4 class="font-weight-medium font-serif mb-4">Enhance brand recognition and profitability by building a leading brand in the field</h4>
        <div class="row">
            <?php 
                   $query = "SELECT * FROM digitalmarketing";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex digi-mkt-col flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content mb-4" style="width: 100px; height: 100px;">
                       
                        <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                    </div>
                    <h4 class="font-weight-bold m-0"><?php echo $row['tittle']; ?></a></h4>
                    
                </div>
            </div>
        <?php } ?>
<!--             <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center  mb-4" style="width: 100px; height: 100px;">
                       <img class="w-100" src="img/webdesign.png"alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Web Design & Development

                    </h4>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center mb-4" style="width: 100px; height: 100px;">
                      <img class="w-100" src="img/content3.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Content Writing
                    </h4>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center  mb-4" style="width: 110px; height: 100px;">
                        <img class="w-100" src="img/ecommerce.png" width="100%" height="75px" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">eCommerce Marketing</h4>
                
                    
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="row">
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center mb-4" style="width: 100px; height: 100px;">

                       
                        <img class="w-100" src="img/email.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Email Marketing</h4>
        
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center  mb-4" style="width: 100px; height: 100px;">
                       <img class="w-100" src="img/hosting1.jpg" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m">Web Hosting
                    </h4>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center  mb-4" style="width: 100px; height: 100px;">
                      <img class="w-100" src="img/amazon.png" width="100px" height="75px" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Amazon Marketing Services (AMS)

                    </h4>
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center  mb-4" style="width: 100px; height: 100px;">
                        <img class="w-100" src="img/eweb.png" width="120px" height="75px" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">eCommerce Web Design</h4>
            
                    
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- Services End -->


  <?php include('includes/fooder.php'); ?>