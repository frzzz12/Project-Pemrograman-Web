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
?>