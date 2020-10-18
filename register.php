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
<body style="background: url(img/comlab.jpg)">
    <div class="header">
    <img src="STI.png" alt="">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
        <label>Student number</label>
        <input type="text" name="student_number" value="<?php echo $student_number; ?>">
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
        </div>
        <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a student? <button type="button" class="btn btn-primary"><a href="login.php" style="color: white">Sign in</a></button>
        </p>
    </form>
    
</body>
</html>