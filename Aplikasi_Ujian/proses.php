<?php
require_once("koneksi.php");

$nim = $_POST["nama"];
$asal_sekolah = $_POST["asal_sekolah"];
$sw = $_POST['siswa_baru'];
$bs = $_POST['beasiswa'];
$km = $_POST['kemederkaan'];
$id = $_GET['id'];

$query = mysqli_query($koneksi,"INSERT INTO siswa values('".$nim."','".$asal_sekolah."', '".$sw."', '".$bs."', '".$km."' )");
if($query){
    header("Location:index.php");
}

$hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE idsiswa = $id");
if($hapus){
    header("Location:index.php");
}
?>