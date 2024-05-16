<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles/tambah.css" rel="stylesheet" type="text/css">
    <title>tambah</title>
</head>
<body>
    
    <?php if (!empty($success)) { ?>
    <div class="alert alert-success">
        <p><?= $success ?></p>
    </div>
    <?php } ?>

    <?php if (!empty($error)) { ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
    <?php } ?>

    <?php
        $action = 'tambah.php';
        if(!empty($siswa)) $action = 'edit.php';
    ?>
    <form action="<?= $action ?>" method="POST" enctype="multipart/form-data">
    <div>
         NIS <input type="text" name="nis" value="<?= @$siswa['nis'] ?>"><br>
        Foto 
        <?php if($action == "edit.php") {?>
            <img src="<?php echo empty($siswa['file']) ? 'assets/images/tes.jpg' : 'assets/images' . $siswa['file']; ?>" width="100px" height="110px" id="output" alt="">
            <input type="hidden" name="foto" value="<?php echo @$siswa['file'];  ?>">
        <?php } else { ?>
            <img src="assets/images/pas.png" id="output" width="100px" height="100px" alt="">
        <?php }?>
        <input type="file" name="foto" autocomplete="off" onchange="loadFile(event)">
        Nama Lengkap <input type="text" name="nama_siswa" value="<?= @$siswa['nama_siswa'] ?>"><br>
        Jenis Kelamin<br>
        <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki-Laki<br>
        <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan<br>
        <!-- Kelas<br>
        <select name="kelas">
            <option value="XI-RPL1" <?= @$siswa['kelas'] == 'XI-RPL1' ? 'selected' : '' ?>>XI-RPL1</option>
            <option value="XI-RPL2" <?= @$siswa['kelas'] == 'XI-RPL2' ? 'selected' : '' ?>>XI-RPL2</option>
            <option value="XI-RPL3" <?= @$siswa['kelas'] == 'XI-RPL3' ? 'selected' : '' ?>>XI-RPL3</option>
        </select> -->
        Kelas<br>
        <select name="id_kelas" class="select1">
            <option value="">[ Pilih Kelas ]</option>
            <?php while ($murid = @$dataKelas->fetch_array()) { ?>
                <option value="<?php echo $murid['id_kelas'] ?>" <?php echo @$siswa[
                'id_kelas'] == $murid['id_kelas'] ? 'selected' : '' ?>>
                    <?php echo $murid['nama_kelas'] ?>
                </option>
            <?php } ?>
        </select>
        Jurusan <input type="text" name="jurusan" value="<?= @$siswa['jurusan'] ?>"><br>
        Alamat <input type="text" name="alamat" value="<?= @$siswa['alamat'] ?>"><br>
        Golongan Darah
        <select name="golongan_darah">
            <option value="O" <?= @$siswa['golongan_darah'] == 'O' ? 'selected' : '' ?>>O</option>
            <option value="A" <?= @$siswa['golongan_darah'] == 'A' ? 'selected' : '' ?>>A</option>
            <option value="AB" <?= @$siswa['golongan_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
        </select><br>
        Nama Ibu Kandung <input type="text" name="ibu_kandung" value="<?= @$siswa['ibu_kandung'] ?>"><br><br>
        <input type="submit" value="Simpan"><br>
    </div>
       

    </form>
</body>

<script>
     function loadFile(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
     }
</script>
</html>
