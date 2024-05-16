<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_pwpb18';

    $mysqli = mysqli_connect($host, $user, $pass, $db,)
                or die('Tidak dapat koneksi ke Database');  
?>