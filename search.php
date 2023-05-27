<?php
include('connection.php');
print_r( $_POST);
die();
$a= $_POST['name'];
 
 $sql="SELECT * FROM `categories` where categories LIKE '%$a%' ";
  $result=mysqli_query($conn,$sql);
  $html="";
  while($row=mysqli_fetch_array($result))
 {

 
 $html.='  <h2 class="headline">
                
            </h2>
              <div class ="row">
                  <div class="col-md-6">
                    <img src="admin/'. $row121['image'].'" height="400px" width="500px" ><br>
                    <a href="admin/'. $pdfrow['pdf'].'"download><button id="GetFile" class="button-bulkmail"><b>Download</b></button> </a>
                </div>
                
                <div class="col-md-6">
                     <h2>'. $row121['title'] .'</h2> 
                    <p> '. $row121['subtitle'] .'</p> <br>
                </div>
              </div>';

}

echo $html;
?>