<?php
    include 'lib/library.php';
    include 'lib/helper.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis            = @$_POST['nis'];
        $nama_siswa     = @$_POST['nama_siswa'];
        $jenis_kelamin  = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : ''; // Menangani kemungkinan $_POST['jenis_kelamin'] tidak terdefinisi
        $kelas          = @$_POST['id_kelas'];
        $jurusan        = @$_POST['jurusan'];
        $alamat         = @$_POST['alamat'];
        $golongan_darah = @$_POST['golongan_darah'];
        $ibu_kandung    = @$_POST['ibu_kandung'];
        $foto           = isset($_FILES['foto']) ? $_FILES['foto'] : ['error' => 4]; // Menangani kemungkinan $_FILES['foto'] tidak terdefinisi
        $file           = ''; // Inisialisasi $file dengan string kosong

        if(empty($nis)){
            flash('error', 'Mohon masukan NIS dengan benar');
        } elseif(empty($nama_siswa)){
            flash('error', 'Mohon masukan Nama Lengkap dengan benar');   
        } else {
            // Hanya mencoba mengunggah file jika ada file yang dipilih dalam formulir
            if(!empty($foto) and $foto['error'] == 0){
                $path = './assets/images/';
                $upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);
                
                if(!$upload){
                    flash('error', "Upload file gagal");
                    header('location:index.php');
                    exit(); // Menghentikan eksekusi skrip setelah memanggil header('location: index.php')
                }
                $file = $foto['name'];
            }
        }

        
        $sql = "INSERT INTO siswa (nis, nama_siswa, jenis_kelamin, id_kelas, jurusan, alamat, golongan_darah, ibu_kandung, file) VALUES
                ('$nis', '$nama_siswa', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$golongan_darah', '$ibu_kandung', '$file')";

        $mysqli->query($sql) or die ($mysqli->error);

        header('location: index.php');
            exit(); // Menghentikan eksekusi skrip setelah memanggil header('location: index.php')
        }

        $success = flash('success');
        $error = flash('error');

        //Ambil data kelas
        $sql = "SELECT * FROM kelas";
        $dataKelas = $mysqli->query($sql) or die($mysqli->error);

        include 'views/v_tambah.php';   
?>
