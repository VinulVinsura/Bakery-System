<?php
$servername = "localhost:4306"; // or the IP address of your MySQL server
$username = "root";        // your MySQL username
$password = "";            // your MySQL password
$dbname = "bakery_system"; // your database name
            // your custom port number

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
    if(!$con){
        die('Could not connect: ' . mysqli_error($con));
    }
  
        
?>