<?php
    include 'lib/helper.php';
    include 'lib/library.php';

    checkLogin();

    //Membuat query SQL mengambil data siswa
    $sql = 'SELECT * FROM siswa INNER JOIN kelas ON 
    (siswa.id_kelas = kelas.id_kelas)';  

    $search = trim($_GET['search'] ?? '');
    $sort = trim($_GET['sort'] ?? '');
    $order = strtoupper($_GET['order'] ?? '') === 'DESC' ? 'ASC' : 'ASC';

    $query = "SELECT * FROM siswa";

    if($search){
        $query .= " WHERE (nis LIKE ? OR nama_siswa LIKE ? OR ibu_kandung LIKE ? OR alamat LIKE ?) ";
        $params = ["%$search%", "%$search%", "%$search%", "%$search%"];
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param(str_repeat("s", count($params)), ...$params);
    }else{
        $stmt = $mysqli->prepare($query);
    }

    if($sort){
        $query .= " ORDER BY $sort $order";
        $stmt = $mysqli->prepare($query);
    }

    $stmt->execute();

    $listSiswa = $stmt->get_result();

    include 'views/v_index.php';
?>