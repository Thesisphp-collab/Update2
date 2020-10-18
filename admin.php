<?php 
    /*require

    $admin_id = $_POST['user'];
    $admin_id = $_POST['pass'];

    $admin_id = stripcslashes($admin_id);
    $password = stripcslashes($password);
    $admin_id = mysql_real_escape_string($admin_id);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    $result = mysql_query("SELECT * FROM admin WHERE admin_id = '$admin_id' AND password = '$password'") 
        OR die("Failed to query database " .mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['admin_id'] == $admin_id && $row['password'] == $password) {
        echo "Login success Welcome" .$row['admin_id'];
    } else {
        echo "Failed to login";
    }




?