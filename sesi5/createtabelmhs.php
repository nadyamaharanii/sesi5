<?php
    include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

   if($cnn){
        $tbel = "tbMHS";
        $sql = "CREATE TABLE $tbel(
           id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
           nama VARCHAR(35),
           nim VARCHAR(10),
           alamat VARCHAR(255),
           telp VARCHAR(15),
           prodi VARCHAR(25),
           jeniskelamin VARCHAR(1),
           tgllahir DATE
        ) "; 
        $hasil = mysqli_query($cnn, $sql );    
        if($hasil){
           echo "pembuatan tabel " . $tbel . "Sukses";
        }else{
            echo "pembuatan tabel " . $tbel . "Gagal";
        }
   }else{
        echo "koneksi ke Mysql Gagal";
   }
    