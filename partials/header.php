<?php
require 'config/database.php';

//fetch current user from database
if(isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--stylesheet-->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!---iconscont cdn-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!--- google fonts (monserrat)----->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;800;900&family=Poppins:wght@200;300;400;500;600;700&family=Raleway:ital,wght@0,300;0,400;0,500;0,700;0,800;1,200&display=swap" 
    rel="stylesheet">

    <title>abdul fattah</title>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="<?= ROOT_URL ?>" class="nav_logo">photograph</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">about</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">contact</a></li>
                 <?php if(isset($_SESSION['user-id'])): ?>
                    <li class="nav_profile">
                    <div class="avatar">
                        <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>logout.php">logout</a></li>
                    </ul>
                </li>
                <?php else : ?>
                <li><a href="<?= ROOT_URL ?>signin.php">singin</a></li> 
                 <?php endif ?>  

            </ul>
            <button id="open_nav_btn"><i class="uil uil-bars"></i></button>
            <button id="close_nav_btn"><i class="uil uil-times"></i></button>
        </div>
    </nav>
    <!---END NAV--->