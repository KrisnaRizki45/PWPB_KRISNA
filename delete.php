<?php
    include 'lib/library.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nis = $_POST['nis'];

        $sql = "DELETE FROM siswa WHERE nis = '$nis' ";

        if($mysqli->query($sql)){
            echo 1; // Berhasil
        }else{
            echo 0; // Gagal
        }
    }
?>
