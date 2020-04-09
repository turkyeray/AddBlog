<?php
	include "connection.php"; //1.Adım
	
	if(isset($_GET["islem"])){
		if($_GET["islem"]=="yenikullanici"){
			$sql = "insert into kullanicilar set kad='".$_POST["kad"]."', parola='".$_POST["parola"]."',yetki='".$_POST["yetki"]."'";//2.Adım
			$conn->query($sql);//3.Adım
			header('location:kullanicilar.php?i=1');
		}
	}
?>