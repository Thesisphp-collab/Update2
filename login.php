<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body style="background: url(img/comlab1.jpg)">
    
    <div class="header">
        <img src="STI.png" alt="">
        <h2>Login</h2>
    </div>
    
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
        <label>Username</label>
        <input type="text"  name="username">
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password"  name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a student? <button type="button" class="btn btn-primary"><a href="register.php" style="color: white;">Sign up</a></button>
        </p>
    </form>
    
</body>
</html>