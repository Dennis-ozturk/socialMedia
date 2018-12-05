<?php

if(isset($_POST['submitLogin'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


    $getUsers = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $getUsers);

    if(mysqli_num_rows($result) == 1){
        while($row = $result -> fetch_assoc()){
            if($row['email'] == $email && $row['password'] == $password){
                $_SESSION['email'] = $email;
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                header('Content-Type: text/html; charset=utf-8');
                header('location: home.php');
            }
        }
    }
}

?>