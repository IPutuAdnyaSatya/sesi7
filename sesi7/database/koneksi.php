<?php
    // untuk include
    // include();
    // include_once();
    // require();
    // require_once();

    include("konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Eror");
   
    //  if($cnn){
    //      echo "Koneksi ke DBMS Mysql sukses";
    //  }else{
    //      echo "Koneksi ke DBMS Mysql gagal";
    //  }
    // mysqli_close($cnn);