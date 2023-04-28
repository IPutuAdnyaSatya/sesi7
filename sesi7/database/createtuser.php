<?php

    include("koneksi.php");

    $tbel = "CREATE TABLE tb_user(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255) 
    );";

    // $tbel = "CREATE TABLE tb_mahasiswa(
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     nama VARCHAR(35),
    //     nim VARCHAR(255),
    //     prodi VARCHAR(10),
    //     jenis_kelamin VARCHAR(1),
    //     tgl_lahir DATE,
    //     idmhs VARCHAR(255) 
    // );";
    

    $hsl = mysqli_query($cnn , $tbel);
    if($hsl){
        echo "Tabel $tbel ==> sukses";
    }
