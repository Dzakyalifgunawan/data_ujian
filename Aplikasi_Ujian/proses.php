<?php

require_once("koneksi.php");

$nim = $_POST['nama'];
$asal_sekolah = $_POST['asal_sekolah'];
$sw = $_POST['siswa_baru'];
$bs = $_POST['beasiswa'];
$km = $_POST['kemederkaan'];

$query = mysqli_query($koneksi,"INSERT INTO siswa(nama, asal_sekolah, siswa_baru, beasiswa, kemerdekaan) values('".$nim."','".$asal_sekolah."', '".$sw."', '".$bs."', '".$km."' )");
if($query){
    header("Location:index.php");
}
?>