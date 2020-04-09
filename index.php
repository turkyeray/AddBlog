<?php
session_start();
if(!isset($_SESSION["giris_yaptimi"])){
	header('location:login.php?hata=2');
}
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
					<h5>Haber Listesi</h5>
				</div>
				<table class="col-md-12 table table-bordered table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Haber Başlığı</th>
							<th>Haber Kategorisi</th>
							<th>Aksiyon</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>KORONA viriü aşısı denemelerine başlandı.</td>
							<td>Güncel</td>
							<td><a href="detay.php?id=1">Detay</a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>GALARASARAY'dan ezici galibiyet.</td>
							<td>Spor</td>
							<td><a href="detay.php?id=2">Detay</a></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Kara kış kapıda.</td>
							<td>Havadurumu</td>
							<td><a href="detay.php?id=3">Detay</a></td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</section>
	</body>
</html>