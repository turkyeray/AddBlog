<?php 
session_start();
//1. Adım Veritabanı Bağlantısı sağla
include "connection.php";
//2. Adım SQL Sorgunu Oluştur
$sql = "select * from kullanicilar where kad='".strip_tags(addslashes(trim($_POST["kad"])))."' and parola='".strip_tags(addslashes(trim($_POST["parola"])))."'";
//3. Adım SQL Cümlesini Sunucuya Gönder
$sonuc = $conn->query($sql);
//4. Sonuç dönüp dönmediği kontrol edilir
if($sonuc->num_rows>0){
	//5. Kullanıcı adı ve parolası doğru ise
	$kayitlar = $sonuc->fetch_object();
	$_SESSION["giris_yaptimi"]=true;
	$_SESSION["kim"] = $kayitlar->kad;
	$_SESSION["yetki"] = $kayitlar->yetki;
	header("location:index.php");
}else{
	header('location:login.php?hata=1');
}
?>