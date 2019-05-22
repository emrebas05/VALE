<?php
include "baglanti.php";


$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$mail = $_POST["mail"];
$kadi = $_POST["kadi"];
$pw = $_POST["pw"];

$kaydet=$db->prepare("INSERT INTO kullanici SET
  uye_adi=:uye_adi,
  uye_soyad=:uye_soyad,
  uye_mail=:uye_mail,
  uye_kadi=:uye_kadi,
  uye_pw=:uye_pw
  ");
$insert=$kaydet->execute(array(
  'uye_adi' => $_POST['ad'],
  'uye_soyad' => $_POST['soyad'],
  'uye_mail' => $_POST['mail'],
  'uye_kadi' => $_POST['kadi'],
  'uye_pw' => $_POST['pw']
));

if ($insert) {

  Header("Location:index.php?durum=ok");

} else {

  Header("Location:index.php?durum=no");
}



 ?>
