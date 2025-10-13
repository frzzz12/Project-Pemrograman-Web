<?php 

include 'functionadm.php';

$id = $_GET['id'];

if(hapus($id) > 0) {
    echo "
    <script>
    alert('Ingin Menghapus data?');
    document.location.href = 'tamu.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus');
    document.location.href = 'tamu.php';
    </script>
    ";
}

?>