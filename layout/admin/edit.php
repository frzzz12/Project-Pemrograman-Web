<?php  
include 'functionadm.php';

$id = $_GET['id'];
$tamu = query("SELECT * FROM tamu WHERE id_tamu=$id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'tamu.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah!');
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
    <title>Edit Data Tamu</title>
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
        .form-wrapper {
            position: relative;
            z-index: 2;
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <img src="../../assets/img/pasirputih.jpg" class="bg-image" alt="Background">
    <div class="overlay"></div>

    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-wrapper bg-primary text-white p-4 rounded shadow">
            <h3 class="text-center mb-3">Edit Data Tamu</h3>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $tamu['id_tamu'] ?>">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?= $tamu['nama'] ?>" class="form-control rounded">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?= $tamu['alamat'] ?>" class="form-control rounded">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" required value="<?= $tamu['email'] ?>" class="form-control rounded">
                </div>

                <div class="mb-3">
                    <label for="organisasi" class="form-label">Organisasi</label>
                    <input type="text" name="organisasi" id="organisasi" required value="<?= $tamu['organisasi'] ?>" class="form-control rounded">
                </div>

                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <input type="text" name="pesan" id="pesan" required value="<?= $tamu['pesan'] ?>" class="form-control rounded">
                </div>

                <div class="text-center">
                    <button type="submit" name="ubah" class="btn btn-light fw-semibold mt-3">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>