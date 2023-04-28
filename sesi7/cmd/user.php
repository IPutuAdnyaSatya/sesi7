<?php
    include("database/koneksi.php");

    function createuser($nama, $email, $user, $pass){

        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tb_user(nama, email, username, passkey, iduser) 
        VALUES(
            '$nama',
            '$email',
            '$user',
            '$pass',
            '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Eror");
        $stt = mysqli_query($cnn, $sql);
        return $stt;

    }
    function ceklogin($user,$pwd){
        global $cnn;
        $hsl["STATUS"] = false;

       $sql = "SELECT nama, email,useername, passky, iduser FROM tbuser WHERE username= '$user';";
       
        $hs = mysqli_query($cnn, $$sql);
        $jdata = mysqli_num_rows($hs);

        if($jdata > 0){
            $h = mysqli_ fetch_assoc($hs);
            if ($h["passkey"]= $pwd){
                $hsl["STATUS"] = true;
                $hsl["NAMA"] = $h["nama"];
                $hsl["EMAIL"] = $h["email"];
                $hsl["IDUSER"] = $h["iduser"];
            }
        }
        return $hsl;
    }