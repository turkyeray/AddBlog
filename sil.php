<?php
	include "connection.php"; //1.Adım
	
	if(isset($_GET["islem"])){
		if($_GET["islem"]=="kullanicisil"){
			$sql = "delete from kullanicilar where kad='".$_GET["kad"]."'";
			$conn->query($sql);
			header("location:kullanicilar.php?i=2");
		}
	}
?>