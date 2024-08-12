<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Your Cake</title>
    <link rel="stylesheet" href="orderForm.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>


<?php

include("config.php");

if(isset($_POST['submit'])){
    $username=$_POST['userName'];
    $email=$_POST['email'];
    $cakeMode=$_POST['cake-model'];
    $qty=$_POST['qty'];
    $phoneNum=$_POST['phoneNum'];
    $date=$_POST['date'];


    $sql="INSERT INTO orders (userName,email,phoneNum,qty,orderDate,cakeModel)
    VALUES
    ('$username','$email','$phoneNum','$qty','$date','$cakeMode')";

if(!mysqli_query($con, $sql)){
    die("Error" .mysqli_error($con));
}else{
    ?>
    <script>
      swal("Order Create Successfully !", "You clicked the button!", "success");
      
    </script>
    <?php
}


}

mysqli_close($con);

?>


    <div class="container">
        <h1>Order Your Cake</h1>
        <form id="orderForm" method="post">
       
              <div class="form-group">
                <label for="name"class="label">Your Name:</label>
                <input type="text" id="userName" name="userName" placeholder="Enter your name" >
            </div>
            
            <div class="form-group" >
                <label for="email" class="label">Your Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="cake-model"><b>Choose a cake model:</b></label>
                <select id="cake-model" name="cake-model" placeholder="Choose a cupcake model">
                    <option >Choose a cupcake model</option>
                    <option value="chocolate">Decadent Dark Chocolate Truffle</option>
                    <opton value="vanilla">Salted Caramel Mocha Delight</option>
                    <option value="red-velvet">Raspberry Chocolate Bliss</option>
                    <option value="carrot">Peanut Butter Fudge Cupcake</option>
              
                </select>

            <div class="form-group">
                <label for="name"class="label">Quntity:</label>
                <input type="number" id="name" name="qty" placeholder="Enter Quntity">
            </div>

            <div class="form-group" >
                <label for="number" class="label">Mobile Number:</label>
                <input type="number" id="tel" name="phoneNum">
            </div>
        
             <div class="form-group" >
                    <label for="date" class="label">Pick-up Date:</label>
                    <input type="date" id="date" name="date">
                </div> 
                <br><br>
                <button class="btn btn-primary w-100 py-2" type="submit" name="submit">Place Order</button> 
                <br><br>
                <a href="home.php">Go Home</a>

        </form>
      
    </div>


</body>
</html>



