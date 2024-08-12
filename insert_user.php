<!DOCTYPE html>
<html>
  <head>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>

  <body>

  <?php
include("config.php");

if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    
    $sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
    
    $result=mysqli_query($con,$sql);
     
    $row=mysqli_fetch_assoc($result); 

    if(is_array($row) && !empty($row)){
     $_SESSION['valid']=$row['email'];
    }

    if(isset($_SESSION['valid'])){
      header("Location: home.php");
    }else{
       header("Location: login.php");  

       ?>
      <script>
        swal("Invalid UserName Or Password !", "You clicked the button!", "error");
        
      </script>
      <?php

    }


         
}



mysqli_close($con);
?>



   
    
  </body>
</html>



