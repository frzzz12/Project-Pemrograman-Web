<?php 
include 'functionadm.php';

$id = $_GET['id'];

$tamu = query( "SELECT * FROM tamu WHERE id_tamu=$id")[0];

if(isset($_POST['ubah'])) {
    if(ubah($_POST) > 0 ) {
        echo "<script>
        alert('data berhasil di ubah!')
        document.location.href = 'tamu.php'
        </script>";
    } else {
        echo "<script>
        alert('data gagal di ubah!')
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
    <link rel="stylesheet" href="adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Edit data Tamu</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-primary text-white p-4 fw-semibold rounded">
            <h3 class="text-center">Edit Data</h3>
            <hr>
            <div>
                <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?=$tamu['id_tamu']?>">
                                <div class="d-flex flex-column align-items-center">
                                    <div>
                                        <div>
                                            <label for="" >Nama</label>
                                        </div>
                                        <div>
                                            <input type="text" name="nama" value="<?=$tamu['nama']?>" class="rounded form-control">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <label for="" >alamat</label>
                                        </div>
                                        <div>
                                            <input type="text" name="alamat" value="<?=$tamu['alamat']?>" class="rounded form-control">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <label for="" >email</label>
                                        </div>
                                        <div>
                                            <input type="email" required name="email" value="<?=$tamu['email']?>" class="rounded form-control">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <label for="" >organisasi</label>
                                        </div>
                                        <div>
                                            <input type="text" required name="organisasi" value="<?=$tamu['organisasi']?>" class="rounded form-control">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <label for="" >Pesan</label>
                                        </div>
                                        <div>
                                            <input type="text" required name="pesan" value="<?=$tamu['pesan']?>" class="rounded form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-light mt-4" name="ubah" type="submit" >Ubah</button>
                                    </div>
                                </div>
                            </form>
            </div>
        </div>

    </div>
</body>
</html>