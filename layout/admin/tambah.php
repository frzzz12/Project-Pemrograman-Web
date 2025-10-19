<?php  
include 'functionadm.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'tamu.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'tamu.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
            opacity: 50%;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .form-container {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>

    <div class="form-container d-flex justify-content-center align-items-center min-vh-100 p-4">
        <div class="p-4 rounded text-light fw-semibold" style="width: 100%; max-width: 500px; box-shadow: 7px 10px 25px rgba(0, 0, 0, 0.30); background-color: rgba(13, 110, 253, 0.7);">
            <h4 class="text-center mb-3"><a href="tamu.php" class="text-light text-decoration-none">Tambah Data</a></h4>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_tamu" class="form-label">ID</label>
                    <input type="number" name="id_tamu" id="id_tamu" class="form-control" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="organisasi" class="form-label">Organisasi</label>
                    <input type="text" name="organisasi" id="organisasi" class="form-control" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <input type="text" name="pesan" id="pesan" class="form-control" autocomplete="off">
                </div>
                <div class="text-center">
                    <button type="submit" name="tambah" class="btn btn-light fw-semibold">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>