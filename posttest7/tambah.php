<?php
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $nama = $_POST["Nama"];
    $lomba = $_POST["Lomba"];
    $date = date("Y-m-d");

     // UPLOAD GAMBAR
     $img = $_FILES["Gambar"]["name"];
     $explode = explode('.', $img);
     $ekstensi = strtolower(end($explode));
     $gambarbaru = "$date.$nama.$ekstensi";
     $tmp = $_FILES ["Gambar"]["tmp_name"];

     if (move_uploaded_file($tmp, 'assets/'. $gambarbaru)) {
        $result = mysqli_query($conn, "INSERT INTO lomba (id, nama, lomba, gambar)
            VALUES ('', '$nama', '$lomba', '$gambarbaru')");

        if ($result) {
            echo "
            <script>
            alert('data berhasil ditambahkan !');
            document.location.href = 'admin.php'
            </script>";        
        }else {
            echo "
            <script>
            alert('data berhasil ditambahkan !');
            document.location.href = 'tambah.php'
            </script>";
        }
    }else {
        echo "Gambar Tidak terUpload";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="posttest2style.css">
</head>

<body>
    <section class="add-data">
            <div class="add-form-container">
                <h1>Tambah Data</h1><hr><br>
                <form action="" method="post" enctype = "multipart/form-data">
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id=""> <br>
                <label for="Lomba">Lomba</label>
                <input type="text" name="Lomba" id=""> <br>
                <label for="Gambar">Gambar</label>
                <input type="file" name="Gambar" id=""> <br>
                <button type="submit" name="tambah">Tambah</button>
                </form>
            </div>
    </section>
    <a href="index.php">Kembali ke Beranda</a>
</body>

</html>