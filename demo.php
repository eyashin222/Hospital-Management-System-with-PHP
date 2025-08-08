<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>HMS</title>
    <link rel="stylesheet" href="assets/css/style-R.css">
</head>
<?php
session_start();
include('includes/connection.php');

if(isset($_REQUEST['login']))
{
    $username = mysqli_real_escape_string($connection, $_REQUEST['username']);
    $password = mysqli_real_escape_string($connection, $_REQUEST['pwd']);
    
    // Fetch user data by username
    $fetch_query = mysqli_query($connection, "SELECT * FROM tbl_admin WHERE username ='$username'");
    $res = mysqli_num_rows($fetch_query);

    if($res > 0)
    {
        $data = mysqli_fetch_array($fetch_query);
        $hashedPassword = $data['password'];

        // Verify the hashed password
        if(password_verify($password, $hashedPassword))
        {
            $name = $data['first_name'].' '.$data['last_name'];
            $role = $data['role'];
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header('location:dashboard.php');
        }
        else
        {
            $msg = "Incorrect login details.";
        }
    }
    else
    {
        $msg = "Incorrect login details.";
    }
}
?>
<body>
    <div class="login-form">
        <div class="brand-logo">
            <img src="assets/img/logo-dark.png" alt="Logo">
        </div>
        <form method="post" class="form-signin">
            <div class="form-group-e">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required placeholder="Enter Username">
            </div>

            <div class="form-group-e">
                <label for="password">Password:</label>
                <input type="password" id="pwd" name="pwd" required>
            </div>
            <span style="color:red;"><?php if(!empty($msg)){ echo $msg; } ?></span>

            <button type="submit" name="login">Login</button>
            <p>Don’t have an account?<a href="registration.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>
