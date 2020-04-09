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
					<h5>Kullanıcı Oluştur</h5>
				</div>
				<form action="kaydet.php?islem=yenikullanici" method="post">
				<table class="col-md-12 table table-bordered table-hover">
					
					<tbody>
						<tr>
							<td>Kullanıcı Adı</td>
							<td><input type="text" name="kad" class="form-control"></td>
							
						</tr>
						<tr>
							<td>Parola</td>
							<td><input type="password" name="parola" class="form-control"></td>
						</tr>
						<tr>
							<td>Yetki</td>
							<td>
								<select name="yetki" class="form-control">
									<option value="1">Admin</option>
									<option value="2">Yazar</option>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn btn-danger" value="Kaydet"></td>
						</tr>
					</tbody>
				</table>
				</form>
				
			</div>
		</section>
	</body>
</html>