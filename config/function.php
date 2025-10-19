<?php 
    $host = 'localhost';
    $user = 'root';
    $pw = 'Frozzt123';
    $db = 'tinanggea';

    $hub = mysqli_connect($host, $user, $pw, $db);


    
    
    function tambah($data) {
        global $hub;
        $id = $_POST['id'];
        $nama = $_POST['name'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $organisasi = $_POST['organisasi'];
        $pesan = $_POST['pesan'];

        $query = "INSERT INTO tamu
        VALUES ($id, '$nama', '$alamat', '$email', '$organisasi', '$pesan');
        ";

        mysqli_query($hub, $query);

        return mysqli_affected_rows($hub);

    }
?>