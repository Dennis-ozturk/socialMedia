<?php include './db/config.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
</head>
<body>

<header>
    <h1>ZoftDeluxe</h1>
    <?php 
        if(isset($_SESSION['email'])){

        
        ?>
        <?php
        }else{

        ?>
        <?php
        } 
    ?>
</header>


    