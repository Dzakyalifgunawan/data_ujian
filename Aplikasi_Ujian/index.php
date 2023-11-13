<?php
 require_once("koneksi.php");
?>

<?php
    $qdata = mysqli_query($koneksi, "select * from siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Aplikasi Ujian</title>
</head>
<body>
    <center>
        <h3>Form Aplikasi Ujian</h3>
    </center>
    <div class="container-fluid">
            <a class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#add">Tambah Data</a>
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="#" method="post">        
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Siswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-2 row">
                                        <label for="email" class="col-sm-2 col-form-label">Nama</label> :
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama" name="asal">
                                        </div>
                                    </div>
                                    <div class="mb-2 row">
                                        <label for="email" class="col-sm-2 col-form-label">Asal Sekolah</label> :
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="asal" name="asal">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="tambah" name="tambah">Tambah Data</button>
                                </div>
                        </div>
                    </form>    
                </div>
            </div>
            <div id="tanggal"></div>
        <form action="proses.php" method="post">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Sekolah Asal</th>
                    <th>Siswa Baru</th>
                    <th>Beasiswa</th>
                    <th>Kemerdekaan</th>
                    <th>Simpan Data</th>
                </tr>
                <tr>
                    <td></td>
                    <td id="siswa"></td>
                    <td id="asalsekolah"></td>
                    <td id="sb"></td>
                    <td id="bs"></td>
                    <td id="km"></td>
                    <td><button class="btn btn-primary">Simpan</button></td>
                </tr>
            </table>
        </form>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Sekolah Asal</th>
                    <th>Siswa Baru</th>
                    <th>Beasiswa</th>
                    <th>Kemerdekaan</th>
                    <th></th>
                </tr>
                <?php
                    $no = 1;
                    while($row = mysqli_fetch_array($qdata)){
                ?>
                <tr>
                    <td></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['asal_sekolah'] ?></td>
                    <td><?php echo $row['siswa_baru'] ?></td>
                    <td><?php echo $row['beasiswa'] ?></td>
                    <td><?php echo $row['kemerdekaan'] ?></td>
                    <td><button type="button" class="btn btn-primary">Delete</button></td>
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </table>
    </div>
    <script src="assets/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>