<?php
  session_start();
?>


<!DOCTYPE html>
<html>

<head> 
 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    
    <link rel="stylesheet" href="login_page.css">
    <!--Using boostrp css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body>


    <div class="container">

        <div class="row">
         <div class="col-4"></div>
            <div class="col-4">
                <form class="loginForm" method="post" action="insert_user.php">
     
                    <h1 class="h3 mb-3 fw-normal"><b>Please sign in</b></h1>

                    <div class="form-floating">
                        <input type="email" class="form-control"  placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control"  placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" >
                        <label class="form-check-label" for="flexCheckDefault">
                            <b>Remember me</b>
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit" name="submit">Sign in</button>
                    <br><br>
                    
                    <p><b>Don't have account?   </b> <a href="sign_up_form.php">Sign Up</a></p>
                    
                </form>

            </div>
            <div class="col-4"></div>

        </div>
    </div>


    <!--Using boostrp js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        

</body>

</html>



