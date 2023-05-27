<?php include('includes/header.php');
      include('connection.php');
 ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">Google Advert Setup
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Google Advert Setup</a>
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
                   $query = "SELECT * FROM googleads";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
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
            </div><?php }?>
        </div>
    </div>
    
  <!-- Detail End -->
<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <h1 class="display-4 text-center mb-5">Key features
        </h1>
    
        <div class="row">
             <?php 
                   $query = "SELECT * FROM googleadsimg";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                    </div>
                    <h4 class="font-weight-bold m-0"><?php echo $row['tittle']; ?>
                    </h4>
                    
                </div>
            </div><?php } ?>            
        </div>
    </div>
    <!-- <div class="row">
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">

                       
                        <img class="w-100" src="img/img75.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Adjust your campaigns.
                    </h4>
        
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                       <img class="w-100" src="img/img76.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m">Improve performance with dynamic creative.
                    </h4>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                      <img class="w-100" src="img/img77.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Test which ads perform best.

                    </h4>
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <img class="w-100" src="img/img78.png" alt="Image">
                    </div>
                    <h4 class="font-weight-bold m-0">Get real-time insights.
                    </h4>
            
                    
                </div>
            </div>
        </div>
    </div> -->
</div>

<!-- Services End -->

<?php include('includes/fooder.php'); ?>