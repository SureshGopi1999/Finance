<?php
session_start();
require("function.php");

$db = new data();

    $name = $_POST['username'];
    $_SESSION['username'] = $name;
    $password = $_POST['password'];  // Corrected $POST to $_POST

    // Calling the loginsert function to check user credentials
    $res = $db->loginsert("login", $name, $password);
    
    // Check if the result is a valid user
    if ($res == true) {
        echo "<script>alert('Login Successful');</script>";
        header("Location:newcustomer.php");
        //exit();  // Always use exit() after a header redirection
    } else {
        echo "<script>alert('Login Failed');</script>";
        header("Location:login.php");
        exit();  // Always use exit() after a header redirection
    }
?>
