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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>
<body>
    <div class="d-flex justify-content-center min-vh-100 align-items-center">
        <div class="bg-primary p-4 rounded text-light fw-semibold">
            <form action="" method="post">
                <div>
                    <label for="">Id</label>
                    <div>
                        <input type="number" name="id_tamu" class="form-control">
                    </div>
                </div>
                <div>
                    <label for="">Nama</label>
                    <div>
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
                <div>
                    <label for="">alamat</label>
                    <div>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                </div>
                <div>
                    <label for="">email</label>
                    <div>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div>
                    <label for="">organisasi</label>
                    <div>
                        <input type="text" name="organisasi" class="form-control">
                    </div>
                </div>
                <div>
                    <label for="">pesan</label>
                    <div>
                        <input type="text" name="pesan" class="form-control">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-light fw-semibold" name="tambah" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>