<?php
    include 'lib/helper.php';
    include 'lib/library.php';

    sudahLogin();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $mysqli->prepare("SELECT * FROM t_login WHERE username = ? AND password = SHA1(?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($result->num_rows != 0){
            $row = $result->fetch_object();
            $_SESSION['username'] = $row->username;
            $_SESSION['level']    = $row->level;
            header('location:index.php');
        } else{
            $error = "Username atau password salah";
        }
    }

    include 'views/v_login.php'
?>