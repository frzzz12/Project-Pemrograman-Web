<?php 
    $host = 'localhost';
    $user = 'root';
    $pw = 'Frozzyt123';
    $db = 'tinanggea';

    $hub = mysqli_connect($host, $user, $pw, $db);

    function query($query) {
        global $hub;
        $result = mysqli_query($hub, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
}

function cari($search) {
    $qr = "SELECT * FROM tamu WHERE 
    nama LIKE '%$search%'";

    return query($qr);
}
function cari2($search2) {
    $qr = "SELECT * FROM admin WHERE 
    username LIKE '%$search2%' OR
    email LIKE '%$search2%'";

    return query($qr);
}
function cari3($search3) {
    $qr = "SELECT * FROM uraian WHERE 
    judul LIKE '%$search3%'";

    return query($qr);
}

function hapus($id) {
    global $hub;
    mysqli_query($hub, "DELETE FROM tamu WHERE id_tamu=$id");
    return mysqli_affected_rows($hub);
}


function ubah($data) {
    global $hub;
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $email = htmlspecialchars($data['email']);
    $organisasi = htmlspecialchars($data['organisasi']);
    $pesan = htmlspecialchars($data['pesan']);

    $query ="UPDATE tamu SET
            nama = '$nama',
            alamat = '$alamat',
            email = '$email',
            organisasi = '$organisasi',
            pesan = '$pesan'
            WHERE id_tamu=$id
    ";

    mysqli_query($hub, $query);
    return mysqli_affected_rows($hub);
}

function tambah($data) {
    global $hub;
    $id = $_POST['id_tamu'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $organisasi = $_POST['organisasi'];
    $pesan = $_POST['pesan'];

    $query = "INSERT INTO tamu
            VALUES
            ('$id', '$nama', '$alamat', '$email', '$organisasi', '$pesan');
    ";

    mysqli_query($hub, $query);
    return mysqli_affected_rows($hub);
}
?>