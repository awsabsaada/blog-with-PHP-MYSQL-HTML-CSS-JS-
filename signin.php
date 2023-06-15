<?php
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
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

<section class="form__section">
    <div class="container form__section-container">
        <h2>sing in</h2>
       <?php if (isset($_SESSION['signup-success'])) : ?>
        <div class="alert__massage success">
            <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']);
                ?>
            </p>
        </div>
        <?php elseif (isset($_SESSION['signin'])) : ?>
        <div class="alert__massage error">
            <p>
                <?= $_SESSION['signin'];
                unset($_SESSION['signin']);
                ?>
            </p>
        </div>
        <?php endif ?>

        <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
            <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Username or Email">
            <input type="password" name="password" value="<?= $password ?>" placeholder=" password">
            <button type="submit" name="submit" class="btn">sing in</button>
            <small>Don't have account?<a href="signup.php">sing up</a></small>
        </form>
    </div>
</section>

</body>
</html>