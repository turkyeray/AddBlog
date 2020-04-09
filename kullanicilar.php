<?php
session_start();
if(!isset($_SESSION["giris_yaptimi"])){
	header('location:login.php?hata=2');
}
include 'connection.php'; // 1.Adım
?>
<html>
	<head>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
			.ortala{margin:50px auto;}
			.form{border:1px solid #d0d0d0;border-radius:5px;padding:10px}
		</style>
	</head>
	<body>
		<section class="row">
			<div class="col-md-8 ortala">
				<div class="col-md-12">
					<h3>Dashboard</h3>
					<p>
						<span><?php echo "Merhaba <strong>".$_SESSION["kim"]."</strong>" ?></span>
						<span class="float-right"><a href="cikis.php">Güvenli Çıkış</a></span>
					</p>
					<h5>Kullanıcilar Listesi</h5>
					<a href="yeni_kullanici.php">Yeni Kullanıcı Ekle</a>
				</div>
				<?php
				if(isset($_GET["i"])){
					if($_GET["i"]==1){
						echo '<div class="alert alert-success">Kullanıcı Başarı ile kayıt edildi</div>';
						
					}elseif($_GET["i"]==2){
						echo '<div class="alert alert-warning">Kullanıcı Başarı ile silindi</div>';
					}
					
				}
				
				
				?>
				
				<table class="col-md-12 table table-bordered table-hover">
					<thead>
						<tr>
							<td>Kullancı Adı</td>
							<td>Yetki</td>
							<td>İşlemer</td>
						</tr>
					</thead>	
					<tbody>
					<?php
						$sql = "select * from kullanicilar"; // 2.Adım
						$sonuc = $conn->query($sql);//3.Adım
						if($sonuc->num_rows>0){ //4.Adım
							while($kayitlar = $sonuc->fetch_object()){//5.adım
					?>
						<tr>
							<td><?php echo $kayitlar->kad?></td>
							<td>
								<?php
								if($kayitlar->yetki==1)
									echo "Admin Kullancı";
								elseif($kayitlar->yetki==2)
									echo "Yazar Kullanıcı";
								
								?>
							</td>
							<td><a href="#">Güncelle</a> | <a href="sil.php?islem=kullanicisil&kad=<?php echo $kayitlar->kad?>">Sil</a></td>
						</tr>
					<?php
							}
						}else{
							echo "Kayıtlı kullanıcı bulunmamaktadır";
						}
					?>
					</tbody>
				</table>
				
			</div>
		</section>
	</body>
</html>