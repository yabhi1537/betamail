

 <?php 
     include('connection.php');
     
    print_r($_POST);die();
//     if (isset($_POST['submit'])) {
    

      $name       =  $_POST['name'];
      $email      =  $_POST['email'];
      $password   =  $_POST['password'];
      $address    =  $_POST['address'];
      $state      =  $_POST['state'];
      $city       =  $_POST['city'];
      $zipcode    =  $_POST['zipcode'];
      $country    =  $_POST['country'];
      $mobile     =  $_POST['mobile'];
      $ip         =  $_POST['ip'];
      $plan       =  $_POST['plan'];

    $sql = "INSERT INTO `smtp`(`name`,`email`,`password`,`address`,`state`,`city`,`zipcode`,`country`,`mobile`,`ip`,`plan`) VALUES ('$name','$email','$password','$address','$state','$city','$zipcode','$country','$mobile','$ip','$plan')";
    print_r($sql);

     $mysql = mysqli_query($conn,$sql);
   //print_r($sql);die();
   if ($mysql==true) {
    //header('location:emailserver.php');
    // echo '<script type="text/javascript">alert("Succesfully Data Inserted") </script>';
    echo "Success";
    }else{
    //header('location:emailserver.php');
    echo 'failde';
   }

    // }

  ?>