<?php
session_start();
require 'koneksi.php';

if (isset($_POST["masuk"])) {
    $username = strtolower($_POST["username"]);
    $pass = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        
        if(password_verify($pass, $row['password'])){
            $_SESSION['login'] = true;

            header ("Location: admin.php");
            exit;
    }
}
$error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="posttest2style.css">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    if (isset($error)) {
        echo "<p style='color: red;'> Username/Password Salah! </p>";
    } else {
        echo "<p style='color: red; display:none;'> Username/Password Salah! </p>";
    }
    ?>


    <div class="form">
        <img src="asiangames.png.jpg" alt="">
        <div class="form-container">
            <h1>Login Admin</h1><hr>
            <form action="" method = "post">
                <input type="text" name="username" placeholder="Username" id=""> <br>
                <input type="password" name="password" placeholder="Password" id=""> <br>
                <button type = "submit" name="masuk"> Login </button>

                <a href = "regis.php">Register</a>
            </form>
        </div>
    </div>
</body>
</html>