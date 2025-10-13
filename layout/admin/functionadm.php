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
?>