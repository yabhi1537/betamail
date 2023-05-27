 <?php 
       include('connection.php');
    //   print_r($_POST['submit']);die();
    // if (isset($_POST['submit'])) {

      $name       =  $_POST['name'];
      $email      =  $_POST['email'];
      $mobile     =  $_POST['mobile'];
      $mailer     =  $_POST['mailer'];
      
      if(isset($_POST['planprice'])){
          
      $planprice =  $_POST['planprice'];
      }else{
          $planprice = 0;
      }
      
    //   print_r($planprice);die();
      
 
     $sql = "INSERT INTO `mailer`(`name`,`email`,`mobile`,`mailer`,`planprice`) VALUES ('$name','$email','$mobile','$mailer','$planprice')";
     $mysql = mysqli_query($conn,$sql);
     
       if ($mysql==true) {
         // echo "<script>location.href='emailmarcketing.php'</script>";
       }else{
        //header('location:workimg.php');
        echo '<script type="text/javascript">alert("Data not Inserted")</script>';
       }
    // }

  ?>