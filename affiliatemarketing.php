<?php include('includes/header.php');
      include('connection.php');
 ?>



<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">AFFILIATE MARKETING
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">AFFILIATE  MARKETING</a>
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
               $query = "SELECT * FROM affiliatemarketing";
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
            </div><?php }?>
        </div>
    </div>
    
  <!-- Detail End -->
<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <?php 
               $query = "SELECT * FROM affiliate_tittle";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
        <h1 class="display-4 text-center mb-5"><strong style="font-size: 43px;"><?php echo $row['tittle']; ?>
        </strong></h1>
        <p style="text-align:center"><b>  <?php echo $row['sub_tittle']; ?></b></p><?php }?>
        <br><br>
       <div class="row">
        <?php 
               $query = "SELECT * FROM afiliateimg";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
            <div class="col-lg-4 mb-2">
                
                <div class="shadow mb-4" style="height:500px;">
                    <div class="position-relative">
                        <a href="<?php echo $row['image']; ?>"><img class="img-fluid" style="height:255px" src="admin/<?php echo $row['image']; ?>" ></a>
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        </a>
                    </div>
                    <p class="m-0 p-4"><?php echo $row['massage']; ?> 
                        <br> 
                        <br>
                    </p>
                </div>
            </div><?php }?>
           
            
        </div>
    </div>
</div>
<!-- Services End -->

   <?php include('includes/fooder.php'); ?>