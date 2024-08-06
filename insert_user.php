<html>
<head>

   <link rel="stylesheet" href="sign_up.css">

</head>

<body>

<?php

include("config.php");


$username=$_POST['username'];
$email=$_POST['email'];
$phoneNum=$_POST['phoneNum'];
$password=$_POST['password'];

$sql="INSERT INTO user (userName,email,phone_num,password)
VALUES
('$username','$email','$phoneNum','$password')";

if(!mysqli_query($con, $sql)){
    die("Error" .mysqli_error($con));
}else{
    
    
}


mysqli_close($con);

?>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>



</html>