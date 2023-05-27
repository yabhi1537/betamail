<?php include('connection.php'); ?>
<?php include('includes/header.php'); ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">SOFTWARE DEVELOPMENT
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">SOFTWARE DEVELOPMENT</a>
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
                <?php 
                   $query = "SELECT * FROM softwear_dev";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>
                <div class="col-lg-5">
                    <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h4 class="text-secondary text-uppercase font-weight-medium mb-3"><b><?php echo $row['tittle'];?></b></h4>
                    <h2 class="mb-4"><?php echo $row['sub_tittle'];?></h2>
                    <h5 class="font-weight-medium font-serif mb-4"><?php echo $row['massage'];?>
                   <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Unique and Creative custom software development</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Intuitive productivity and maintenance tools</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">We are Creative Digital Marketing Company</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Omnichannel performance analysis</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
   <!-- Detail End -->
<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
         
        <h1 class="display-4 text-center mb-5">Expert Custom Software Development With Latest Technologies</h1>
       <div class="row">
           <?php 
                   $query = "SELECT * FROM swdeve_latest";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>
            <div class="col-lg-4 mb-2" >
                <div class="shadow mb-4" style="height:370px;">
                    <div class="position-relative">
                        <a href="<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" src="admin/<?php echo $row['image']; ?>" ></a>
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">

                            <div class="d-flex text-light">

                                
                            </div>
                        </a>
                    </div>
                    <p class="m-0 p-4"><?php echo $row['sub_tittle'];?>  
                    </p>
                </div>
            </div>
           
             <?php }?>
        </div>
       

    </div>
</div>
<!-- Services End -->

<?php include('includes/fooder.php'); ?>