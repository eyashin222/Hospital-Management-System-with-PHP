<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>HMS</title>
    <link rel="stylesheet" href="assets/css/style-R.css">
</head>
<body>
    <?php
    session_start();
    include('includes/connection.php');

    // Define variables to store user input and error messages
    $first_name = $last_name = $username = $emailid = $password = "";
    $msg = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate input data
        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $emailid = mysqli_real_escape_string($connection, $_POST['emailid']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        // Perform registration if all fields are filled
        if (!empty($first_name) && !empty($last_name) && !empty($username) && !empty($emailid) && !empty($password)) {
            // Hash the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $insert_query = "INSERT INTO tbl_admin (first_name, last_name, username, emailid, password) VALUES ('$first_name', '$last_name', '$username', '$emailid', '$hashedPassword')";
            
            if (mysqli_query($connection, $insert_query)) {
                $msg = "Registration successful. Contact Admin for account activation.";
            } else {
                $msg = "Error: " . mysqli_error($connection);
            }
        } else {
            $msg = "Please fill in all fields.";
        }
    }
    ?>

    <div class="registration-form">
        <div class="brand-logo">
            <img src="assets/img/logo-dark.png" alt="Logo">
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Form fields -->
            <div class="form-group-inline">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" required placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" required placeholder="Enter Last Name">
                </div>
            </div>

            <div class="form-group-e">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required placeholder="Enter Username">
            </div>

            <div class="form-group-e">
                <label for="emailid">Email:</label>
                <input type="email" id="emailid" name="emailid" required placeholder="Enter Your E-mail">
            </div>

            <div class="form-group-e">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Registeration</button>
            <p>Already have an account? <a href="index.php">Log in</a></p>
        </form>
    </div>
    
</body>
</html>
<?php
    include('footer.php');
    ?>
    <script type="text/javascript">
    <?php
    // Check if there's a message and it's not an empty string
    if(isset($msg) && $msg !== "") {
        echo 'swal("' . $msg . '");';
    }
    ?>
    </script>