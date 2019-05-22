<?php
include("baglanti.php");

ob_start();
session_start();

$kadi = $_POST['kadi'];
$sifre = $_POST['pw'];


    $kullanicisor=$db->prepare("select * from kullanici where uye_mail=:mail  and uye_pw=:password ");
    $kullanicisor->execute(array(
        'mail' => $kadi,
        'password' => $sifre
    ));

    $say=$kullanicisor->rowCount();

    if ($say==1) {

        echo $_SESSION['userkullanici_mail']=$kadi;

        header("Location:index.php");
        exit;

    } else {


        header("Location:../../?durum=basarisizgiris");

    }




 ?>
