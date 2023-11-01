<?php
require "koneksi.php";
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM lomba where id=$id");

$lomba = [];

while ($row = mysqli_fetch_assoc($result)){
    $lomba[] = $row;
}

$lomba = $lomba[0];


if (isset($_POST['edit'])) {
    $nama = $_POST['Nama'];
    $lomba = $_POST['Lomba'];


    $result = mysqli_query($conn, "UPDATE lomba SET Nama = '$nama', lomba='$lomba' WHERE id = '$id' ");

    if ($result) {
        echo "
        <script>
            alert('Data berhasil Diubah!');
            document.location.href = 'admin.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'ubah.php'
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="posttest2style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $lomba['Nama']?>" class="textfield">
                <label for="Lomba">Lomba</label>
                <input type="text" name="lomba" value="<?php echo $lomba['Lomba']?>" class="textfield">
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>