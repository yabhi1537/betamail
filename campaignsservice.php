<?php include('includes/header.php'); 
      include('connection.php');
?>


<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><strong style="color:white">CAMPAIGN SETUP
                    </strong></h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="index.php">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">CAMPAIGN SETUP</a>
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
                    <img class="img-fluid" src="img/emailll.jpg" width="400px" height="200" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h3 class="text-secondary text-uppercase font-weight-medium mb-3"><b>Our mission is to:</b></h3>
                        <h2 class="mb-4"></h2>
                            <h5 class="font-weight-medium font-serif mb-4">Dedicated to providing marketing communication support to the improvement of human endeavours, we are to become one of the best advertising agencies by focusing our talents, time, and energy on the creation of quality products and satisfactory services all over the world.</h5>
                            <h5 class="font-weight-medium font-serif mb-4">Our team serves as an extension of your team, keeping marketing initiatives on track, improving processes, and reallocating resources to meet your business demands. We provide a team trained in our Gold Standard foundation to optimize your organization's processes and preferences.</h5>
                                <div class="row">
                                    <div class="col-sm-6 pt-3">
                                        <div class="d-flex align-items-center">
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-3">
                                        <div class="d-flex align-items-center">
                                           
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-3">
                                        <div class="d-flex align-items-center">
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-3">
                                        <div class="d-flex align-items-center">
                                            
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
        <h1 class="display-4 text-center mb-5"><strong style="font-size: 43px;"> As a team, we work towards your goals.</strong></h1>
 
        <div class="row">
            <?php 
                   $query = "SELECT * FROM campagain";
                   $sql   = mysqli_query($conn,$query);
                   while($row= mysqli_fetch_assoc($sql)){
                ?>
            <div class="col-lg-4 mb-2">
                <div class="shadow mb-4">
                    <div class="position-relative">
                        <a href="admin/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid" style="height:225.66px" src="admin/<?php echo $row['image']; ?>" ></a>
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">

                            <div class="d-flex text-light"><?php echo $row['tittle']; ?>

                            </div>
                        </a>
                    </div>
                    <p class="m-0 p-4" style="height:157px"><?php echo $row['massage']; ?>
                        <br> 
                        <br>
                    </p>
                </div>
            </div>
        <?php }?>
            <!-- <div class="col-lg-4 mb-2">
                <div class="shadow mb-4">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/img09.jpg" alt="">
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">

                            <div class="d-flex text-light">Campaign Requests Simplified

                                <small class="mr-2">
                                </small>
                            </div>
                        </a>
                    </div>
                    <p class="m-0 p-4">Beta IT Solution provides ticketing software so your team can easily submit new content and always know the status of the campaigns. We are experts in Jira, Trello, and other project management software. 
                    <br>
                <br>
            <br>
        </p>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 mb-2">
                <div class="shadow mb-4">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/img105.jpg" alt="">
                        <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                            <div class="d-flex text-light">Bring Your Ideas to Life

                                <small class="mr-2">
                            </small>
                            </div>
                        </a>
                    </div>
                    <p class="m-0 p-4"> We handle build emails landing pages programs and reports to support your initiatives whether your team is inexperienced or simply pressed for time. You can focus on what's most important - connecting with your audience and generating revenue. 
                    <br>
                
                    </p>
                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- Services End -->


    <?php include('includes/fooder.php'); ?>