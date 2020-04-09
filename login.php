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
			<div class="col-md-4 ortala">
				<div class="col-md-12">
					<h4>Giriş Ekranı</h4>
				</div>
				<form class="col-md-12 form" action="kontrol.php" method="POST">
				  <?php
				  if(isset($_GET["hata"])){ // Değişken oluşturulmuş mu?
					if($_GET['hata']==1){ // Oluşturulmuş ise değeri 1 mi ? 
						echo '<div class="alert alert-danger">Kullanıcı adı veya parolası hatalı.</div>';
					}elseif($_GET["hata"]==2){
						echo '<div class="alert alert-warning">Öncelikle giriş yapmanız gerekmektedir.</div>';
					}
					
				  }
				  ?>
				  
				  <div class="form-group">
					<label for="exampleInputEmail1">Kullanıcı Adı</label>
					<input name="kad" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">Kullanıcı adı ve  parolanızı kimse ile paylaşmayınız.</small>
				  </div>
				  <div class="form-group">
					<label for="exampleInputPassword1">Parola</label>
					<input name="parola" type="password" class="form-control" id="exampleInputPassword1">
				  </div>
				  <div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
				  </div>
				  <button type="submit" class="btn btn-primary">Giriş</button>
				</form>
			</div>
		</section>
	</body>
</html>