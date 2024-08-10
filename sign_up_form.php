<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="sign_up.css">
    <!--Using boostrp css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>

<body>

    <div class="container">

        <div class="row">
         <div class="col-4"></div>
            <div class="col-4">
                <form class="loginForm" method="post">
     
                    <h1 class="h3 mb-3 fw-normal"><b>Please sign up</b></h1>

                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" name="username">
                        <label for="floatingInput">User Name</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" name="phoneNum">
                        <label for="floatingInput">Contact Number</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" >
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-check text-start my-3">

                    </div>
                    <button class="btn btn-success w-100 py-2" type="submit" name="submit">Submit</button>
                    <br><br>
                    <p><b>Already have an account?   </b> <a href="login.php">Sign in.</a></p>
                    
                    
                    
                </form>

            </div>
            <div class="col-4"></div>

        </div>
    </div>


    <!--Using boostrp js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  

</body>

</html>


<?php

include("config.php");

if(isset($_POST['submit'])){
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

    ?>
    <script>
    swal("User Register Successfully..!", "You clicked the button!", "success");

    </script>

    <?php
    
}


}

mysqli_close($con);

?>