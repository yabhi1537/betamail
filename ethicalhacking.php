<?php include('includes/header.php');
      include('connection.php');
 ?>


<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">ETHICAL HACKING
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">ETHICAL HACKING</a>
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
               $query = "SELECT * FROM ethical";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h3 class="text-secondary text-uppercase font-weight-medium mb-3"><b><?php echo $row['tittle']; ?>
                    </b></h3>
                        <h2 class="mb-4"></h2>
                            <h5 class="font-weight-medium font-serif mb-4"><?php echo $row['massage']; ?></h5>

                </div>
            </div><?php } ?>
        </div>
    </div>
    
  <!-- Detail End -->
<!-- Services Start -->
<div class="section_right" id="what-makes-diff">
    <div class="sub-title">
      <h2 style="text-align: center"> Why Choose Us ?</h2>
      <br>
      <br>
    </div>
    <div class="container">
      <div class="row place_order_counter">
        <?php 
               $query = "SELECT * FROM ethicla_tittle";
               $sql   = mysqli_query($conn,$query);
               while($row = mysqli_fetch_array($sql)){
                
            ?>
          <div class="col-xl-4 col-lg-6 col-sm-12 col-12">
            <h4></h4>
            
            <p><i class="fa fa-check text-primary mr-2"></i><b><?php echo $row['tittle'];?></b></p>
          </div>
           <?php } ?>
      </div>
    </div>
</div>
<br>
<br>
<br>

<!-- Services End -->

<?php include('includes/fooder.php'); ?>