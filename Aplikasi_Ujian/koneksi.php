<?php
    $servername = "localhost";
    $database = "data_ujian";
    $user_db = "root"; 
    $pass_db = "";

// fungsi untuk mengkoneksikna ke database mysql
    $koneksi = mysqli_connect($servername, $user_db, $pass_db ,$database);
    if(!$koneksi){
        echo "Koneksi Gagal";
        exit; //close koneksi
    }
    // else{
    //     echo "Koneksi Berhasil";
    // }
?>