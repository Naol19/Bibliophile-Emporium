<?php
include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
     // Plain text password

    $email= $_POST['email'];
    // validate email
if( empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $message[]=" please enter valid email ";
}
else{
$email = mysqli_real_escape_string($conn, $_POST['email']);

    // Validate password requirements
    if (strlen($password) >= 8 && preg_match('/[A-Z]/', $password)  && preg_match('/[0-9]/', $password) && preg_match('/[a-z]/', $password))
        {
            $hashedPassword = mysqli_real_escape_string($conn, md5($password ));
            $hashedcPassword = mysqli_real_escape_string($conn, md5($cpassword ));
            if ($hashedPassword != $hashedcPassword) {
                $message[] = 'confirm password not matched!';
            }
            else{
        $user_type = $_POST['user_type'];

        $select_users = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'") or die('query failed');

        if (mysqli_num_rows($select_users) > 0) {
            $message[] = 'User already exists!';
        } else {
            mysqli_query($conn, "INSERT INTO users(name, email, password, user_type) VALUES('$name', '$email', '$hashedPassword', '$user_type')") or die('query failed');
            $_session['status'] = "Registered Successfully";
            // echo '
            // <div class="message">
            //    <span>Registered Successfully</span>
            //    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            // </div>';
            header('location:login.php');
    }
    }
}
    else{
        $message[] = 'Password must be at least 8 characters long and contain both upper case and lower case and at least one digit';
    }

    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <script src="js/aler.js"></script>-->

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="../css/register.css">
</head>

<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
}
?>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <input type="text" name="name" placeholder="Enter your name" required class="box">
            <input type="email" name="email" placeholder="Enter your email" required class="box">
            <input type="password" name="password" placeholder="Enter your password" required class="box">
            <input type="password" name="cpassword" placeholder="Confirm your password" required class="box">
            <select name="user_type" class="box">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Register Now" class="btn">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </div>

</body>

</html>