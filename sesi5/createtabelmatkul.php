<?php
    include("konfigurasi.php");

   $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

   if($cnn){
        $tbel = "tbMATKUL";
        $sql = "CREATE TABLE $tbel(
           kodeMK VARCHAR(8) PRIMARY KEY,
           matakuliah VARCHAR(50),
           SKS INT

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
    