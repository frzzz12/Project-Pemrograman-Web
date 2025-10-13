<?php 
include 'functionadm.php';

if(isset($_POST['tambah'])) {
    if(tambah($_POST > 0)) {
        echo "<script>
        alert('data berhasil di tambahkan!')
        document.location.href = 'tamu.php'
        </script>";
    } else {
    echo "<script>
        alert('data gagal di tambahkan!')
        document.location.href = 'tamu.php'
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">id</label>
            <div>
                <input type="number" name="id_tamu">
            </div>
        </div>
        <div>
            <label for="">Nama</label>
            <div>
                <input type="text" name="nama">
            </div>
        </div>
        <div>
            <label for="">alamat</label>
            <div>
                <input type="text" name="alamat">
            </div>
        </div>
        <div>
            <label for="">email</label>
            <div>
                <input type="email" name="email">
            </div>
        </div>
        <div>
            <label for="">organisasi</label>
            <div>
                <input type="text" name="organisasi">
            </div>
        </div>
        <div>
            <label for="">pesan</label>
            <div>
                <input type="text" name="pesan">
            </div>
        </div>
        <div>
            <button name="tambah" type="submit">Tambah</button>
        </div>
    </form>
</body>
</html>