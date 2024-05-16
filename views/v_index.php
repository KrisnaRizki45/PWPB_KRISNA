<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="styles/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<body>
    <form method="GET" action="index.php">
        <div class="header">
            <input type="text" name="search" value="<?= @$search ?>">
            <button type="submit" class="btn btn-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            </button>
        </div>
        <a href="tambah.php" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
        </svg>
        </a>
        <a href="logout.php" class="btn btn-warning">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
        </svg>
        </a>
        <a href="index.php" class="btn btn-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
        </svg>
        </a>
    </form>
    <table border="1" class="table table-striped table-hover" >
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">
                    Foto
                </th>
                <th scope="col">
                    NIS
                    <a href="index.php?sort=nis&order=asc">↑</a>
                    <a href="index.php?sort=nis&order=asc">↓</a>
                </th>
                <th scope="col">
                    Nama Lengkap
                    <a href="index.php?sort=nama_siswa&order=asc">↑</a>
                    <a href="index.php?sort=nama_siswa&order=asc">↓</a>
                </th>
                <th scope="col">
                    Jenis Kelamin
                    <a href="index.php?sort=jenis_kelamin&order=asc">↑</a>
                    <a href="index.php?sort=jenis_kelamin&order=asc">↓</a>
                </th>
                <th scope="col">
                    Kelas
                    <a href="index.php?sort=kelas&order=asc">↑</a>
                    <a href="index.php?sort=kelas&order=asc">↓</a>
                </th>
                <th scope="col">
                    Jurusan
                    <a href="index.php?sort=jurusan&order=asc">↑</a>
                    <a href="index.php?sort=jurusan&order=asc">↓</a>
                </th>
                <th scope="col">
                    Alamat
                    <a href="index.php?sort=alamat&order=asc">↑</a>
                    <a href="index.php?sort=alamat&order=asc">↓</a>
                </th>
                <th scope="col">
                    Golongan Darah
                    <a href="index.php?sort=golongan_darah&order=asc">↑</a>
                    <a href="index.php?sort=golongan_darah&order=asc">↓</a>
                </th>
                <th scope="col">
                    Nama ibu Kandung
                    <a href="index.php?sort=ibu_kandung&order=asc">↑</a>
                    <a href="index.php?sort=ibu_kandung&order=asc">↓</a>
                </th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $i = 1;
                while ($siswa = $listSiswa->fetch_array()) {
            ?>
            <tr>
                <td><?= $i++ ?></td>
                <td>
                    <?php if(!empty($siswa['file'])) {?>
                        <img width="100px" height="100px" src="<?php echo base_url()?>/assets/images/<?php echo $siswa['file'] ?>" alt="">
                        <?php } else {?>
                            <img src="assets/images/pas.jpg" alt="">
                        <?php }?>
                </td>
                <td><?= $siswa['nis'] ?></td>
                <td><?= $siswa['nama_siswa'] ?></td>
                <td><?= $siswa['jenis_kelamin'] ?></td>
                <td><?= $siswa['nama_kelas'] ?></td>
                <td><?= $siswa['jurusan'] ?></td>
                <td><?= $siswa['alamat'] ?></td>
                <td><?= $siswa['golongan_darah'] ?></td>
                <td><?= $siswa['ibu_kandung'] ?></td>
                <td class="menu-edit">
                    <a href="edit.php?nis=<?= $siswa['nis'] ?>" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                    </a>
                    <form action="delete.php" method="POST" class="formDelete">
                        <input type="hidden" name="nis" value="<?= $siswa['nis'] ?>" data-url="delete.php">
                        <button type="submit" class="btn btn-danger btnDelete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                        </button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        <br>
    </table>
    <div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="float:left;"></h4>
                </div>

                <div class="modal-body">
                </div>

                <div class="modal-footer">
                   <button type="button" class="btn btn-primary btnYa">Ya</button>
                   <button type="button" class="btn btn-danger" data-dismiss="modal" data-url="<?= $siswa['nis'] ?>">Tidak</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>/media/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/media/plugins/toastr/toastr.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>/media/plugins/toastr/toastr.min.css">

    <script type="text/javascript">
        $(function(){
            $(".btnDelete").on("click", function(e){
                e.preventDefault();
                var form = $(this).closest('.formDelete');
                var nama = form.find('input[name="nis]').val();
                var tr = $(this).closest('tr');
                var href = $(this).data('url');
               

                $(".modal").modal('show');
                $(".modal-title").html('Konfirmasi');
                $(".modal-body").html('Anda Yakin ingin menghapus data <b>' + nama + '</b> ?');

                var href = $(this).data('delete.php');

                $('.btnYa').off();
                $('.btnYa').on('click', function(){
                    $.ajax({
                        'url':href,
                        'type':'POST',
                        'data' : form.serialize(),
                        'success': function(result){
                            if(result == 1){
                                $(".modal").modal('hide');
                                tr.fadeOut();

                                toastr.success('Data berhasil dihapus', 'Informasi');
                            } else{
                                $('.modal').modal('hide');
                                toastr.error('Data Tidak Berhasil', 'Informasi');
                            }
                        }
                    })
                })
            })
        })
    </script>
</body>
</html>