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
?>