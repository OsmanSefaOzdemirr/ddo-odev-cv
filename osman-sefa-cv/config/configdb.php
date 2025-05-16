<?php 

    $host = "localhost";
    $username = "root";
    $password = "Linkin.1997";
    $database = "cvdb";

    $baglanti = mysqli_connect($host,$username,$password,$database);

    if(mysqli_connect_errno() > 0){
        die("hata ".mysqli_connect_errno() );
    }
    echo "baglanti basarili";
    mysqli_close($baglanti);
    echo "baglanti kapatildi"
?>