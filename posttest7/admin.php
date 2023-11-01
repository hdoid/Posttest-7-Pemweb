<?php
session_start();
if(!isset($_SESSION['login'])){
    header('Location: login.php');
    exit;
}

require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM lomba");

$lomba = [];

while ($row = mysqli_fetch_assoc($result)){
    $lomba[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="posttest2style.css">
</head>
<body>
    <div class="dashboard">
        <nav class="dash-side-bar">
            <img src="../assets/logo-unmul.png" alt="">
            <ul>
                <p>Halo, Admin</p>
            </ul>
            <a href="logout.php">
                Logout
            </a>
        </nav>
        <main class="dash-container">
            <section class="dash-main">
                <h1>Daftar Peserta Lomba</h1>
                <p><?php date_default_timezone_set("Asia/Makassar"); echo date("l, d-m-y  |  h:i:sa")?></p>
                <br>
                <hr><br>
                <div class="leading-btn">
                    <a href = "tambah.php"><button class="add-btn">Tambah</button></a>
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Lomba</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($lomba as $lmb) :?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $lmb["Nama"] ?></td>
                            <td><?php echo $lmb["Lomba"] ?></td>
                            <td><img src="assets/<?=$lmb["Gambar"]?>" alt="ini gambar" width="100px" height="100px"></td>
                            <td class="action">
                                <a href="ubah.php?id=<?php echo $lmb["ID"] ?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                <a href="hapus.php?id=<?php echo $lmb["ID"] ?>"><button name="hapus" class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach;?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>