<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password' ";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) == 1) {
  	  $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $url = $_SESSION['REDIRECT'];
        header("Location: ./welcome.html");   } else {
            echo 'invalid login credentials';
        };
}
?>