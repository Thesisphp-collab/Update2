<?php
   session_start();
    $username = "";
    $email = "";
    $student_number = "";
    $errors = array();

 // connect to database
 $db = mysqli_connect('localhost', 'root', '', 'registration');

 if (isset($_POST['register'])) {
     $username = mysqli_real_escape_string($db, $_POST['username']);
     $email = mysqli_real_escape_string($db, $_POST['email']);
     $student_number = mysqli_real_escape_string($db, $_POST['student_number']);
     $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
     $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 
     if(empty($username)) {
        array_push($errors, "Username is required");
     }
     if(empty($email)) {
        array_push($errors, "Email is required");
     }
     if(empty($student_number)) {
      array_push($errors, "Student number is required");
   }
     if(empty($password_1)) {
        array_push($errors, "Password is required");
     }
     if ($password_1 != $password_2) {
         array_push($errors, "The two passwords do not match");
     }

     if(count($errors) == 0) {
         $password = md5($password_1);
         $sql = "INSERT INTO users (username, email, student_number, password) 
                        VALUES ('$username', '$email', '$student_number', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
     }
}

if(isset($_POST['login'])) {
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $password = mysqli_real_escape_string($db, $_POST['password']);

   if(empty($username)) {
      array_push($errors, "Username is required");
   }
   if(empty($password)) {
      array_push($errors, "Password is required");
   }
   
   if(count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) == 1) {
         $_SESSION['username'] = $username;
         $_SESSION['success'] = "You are now logged in";
         header('location: index.php');
      }else {
         array_push($errors, "wrong username/password combination");
      }
   }
}

if(isset($_GET['logout'])) {
   session_destroy();
   unset($_SESSION['username']);
   header('location: login.php');
}



?>