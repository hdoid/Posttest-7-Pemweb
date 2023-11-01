<?php
    require 'koneksi.php';

    if(isset($_POST["regis"])){
        $username = strtolower($_POST["username"]);
        $pass = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        if ($pass === $cpassword) {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

            if (mysqli_fetch_assoc($result)){
                echo "
                    <script>
                    alert ('Username telah digunakan');
                    document.location.href = 'regis.php';  
                    </script>";
            } else {
                $sql = "INSERT INTO user VALUES ('', '$username', '$pass')";
                $result = mysqli_query($conn, $sql);

                if (mysqli_affected_rows($conn) > 0) {
                    echo "
                    <script>
                    alert ('Regsitrasi Berhasil');
                    document.location.href = 'login.php';
                    </script>";
                    
                } else {
                    echo "
                    <script>
                    alert ('Regsitrasi Gagal');
                    document.location.href = 'regis.php';
                    </script>";
                }
            }
        } else {
            echo "
                    <script>
                    alert ('Password tidak sama');
                    document.location.href = 'regis.php';
                    </script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Registrasi</h1>
    <form action="" method="post">
        <label for="">Username</label> <br>
        <input type="text" name="username" id=""> <br>
        <label for="">Password</label> <br>
        <input type="password" name="password" id=""> <br>
        <label for="">Konfirmasi Password</label> <br>
        <input type="password" name="cpassword" id=""> <br>
        <button type="submit" name="regis">Registrasi</button>
    </form>
</body>
</html>