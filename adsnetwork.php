<?php include('includes/header.php');
      include('connection.php');
 ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">Ads Network Setup
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.html">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="adsnetwork.html">Ads Network Setup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <?php 
               $query = "SELECT * FROM adsntwrk";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h3 class="text-secondary text-uppercase font-weight-medium mb-3"><b><?php echo $row['tittle']; ?></b></h3>
                        <h2 class="mb-4"></h2>
                            <h5 class="font-weight-medium font-serif mb-4"><?php echo $row['massage']; ?></h5>
                            
                </div>
            </div><?php } ?>
        </div>
    
    
  <!-- Detail End -->
  <br><br>
<!-- Services Start -->
<div class="container-fluid pt-5">
    <div class="container">
    
        <h1 class="display-4 text-center mb-5">Features for Advertisers:

        </h1>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center  shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                         <img class="w-100" src="img/iconuser.png" alt="Image">
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Target audience precisely

                    </h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                         <img class="w-100" src="img/1000.png" alt="Image">
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">100% brand safe
                    
                    </h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center  shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                         <img class="w-100" src="img/user.png" alt="Image">
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Users can scale campaigns

                    </h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                    <div class="d-inline-flex align-items-center justify-content-center  shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                         <img class="w-100" src="img/rporting.png" alt="Image">
                    </div>
                    <h3 class="font-weight-bold m-0 mt-2">Robust reporting

                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div></div>
</div>
<!-- Services End -->


   <?php include('includes/fooder.php'); ?>