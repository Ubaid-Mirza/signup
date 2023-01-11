<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Registration Form</title>
    <?php include "links/link.php" ?>
  </head>
  <body>

  <?php

include 'dbcon.php';

  if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
      echo "email already exits";
    }else{
      if($password === $cpassword){ 
        $insertquery = "insert into registration( username, email,
         mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

         $iquery = mysqli_query($con, $insertquery);
         if($iquery){

          ?>
      
          <script>
      
              alert("Inserted Successfull");
          </script>
      
          <?php
      
      }else{
      
  
      ?>
           <script>
              alert("No Inserted");
           </script>
      
           <?php
      
      }

    }else{
      ?>
           <script>
              alert("Password not match");
           </script>
      
           <?php
    }
  }
  }


?>
    <h1 class="text-center mt-2 h-one">kindly Sign-up below</h1>
    <?php
    include 'form.php';
    ?>
   
  </body>
</html>