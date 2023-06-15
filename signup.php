<?php
require 'config/constants.php';

//GET BACL PRM DATA OF THERE WAS A REGISTRATION ERROR
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
//delete signup data session
unset($_SESSION['signup-data']);
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
        <h2>sing up</h2>
      <?php if(isset($_SESSION['signup'])) : ?> 
            <div class="alert__massage error">
            <p>
                <?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                ?>
            </p>
            
        </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
            <input type="text" name="username" value="<?= $username ?>" placeholder="userName">
            <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
            <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Creat password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm password">
            <div class="form__control">
                <label for="avatar"> user avatar</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <button type="submit" name="submit" class="btn">sign up</button>
            <small>Aleady have an account? <a href="signin.php">sing in</a></small>
        </form>
    </div>
</section>

</body>
</html>