<?php
session_start();
if(!isset($_SESSION["giris_yaptimi"])){
	header('location:login.php?hata=2');
}
if(!isset($_GET["id"])){
	header("location:index.php");
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
					<h3>Haber Detay</h3>
					<p>
						<span><?php echo "Merhaba <strong>".$_SESSION["kim"]."</strong>" ?></span>
						<span class="float-right"><a href="cikis.php">Güvenli Çıkış</a></span>
					</p>

				</div>
				<div class="col-md-12">
					<a href="index.php">Tüm Haberler</a>
					<?php
						if($_SESSION["yetki"]!=1){
							echo '<div class="alert alert-danger">Sayfayı Görmeye Yetkiniz Bulunmamaktadır</div>';
						}else{
							if($_GET["id"]==1){
								echo '<h4>Corona virüsü Türkiye’ye geldi mi?</h4>';
								echo '<img style="width:450px" src="./images/haber1.jpg" />';
								echo "<p>Çin'in Wuhan kentinde ortaya çıkan ve dünyada giderek yayılan corona virüsü (Covid-19) günden güne daha fazla can alıyor. Şimdilik salgın hastalığa rastlanmadığı belirtilen Türkiye'de ise özellikle komşu ülkelerdeki vaka sayısı arttıkça, endişe büyüyor. Çin'de vaka sayısı 80 bini geçti, virüsten ölenlerin sayısı ise 2762’ye ulaştı. Çin'den sonra corona virüsü nedeniyle can kaybının en fazla yaşandığı ülke İran oldu. Resmi rakamlara göre 64 corona virüs vakası tespit edildi, virüsten kaynaklanan ölümlerin sayısı ise 16 olarak açıklandı. İran'daki ölümler, Türkiye'deki kaygıları artırdı.</p>";
							}elseif($_GET["id"]==2){
								echo "<h4>Younes Belhanda'dan derbi sonrası 'Fener ağlama' hareketi!</h4>";
								echo '<img  style="width:450px" src="./images/haber2.jpg" />';
								echo "<p>Galatasaraylı futbolcu Younes Belhanda, Fenerbahçe derbisi sonrası sarı-lacivertlileri kızdıracak bir hareket yaptı.</p>";
							
							}elseif($_GET["id"]==3){
								echo "<h4>Kara kış kapıda</h4>";
								echo '<img style="width:450px" src="./images/haber3.jpg" />';
								echo "<p>Meteoroloji, yurt genelinin Balkanlar üzerinden gelen soğuk ve yağışlı havanın etkisine gireceğini açıkladı. Yurdun bazı kesimlerinde hava sıcaklığı, mevsim normallerinin altına düşecek. İç Anadolu, Doğu Anadolu ve Güneydoğu Anadolu’da kar yağışı bekleniyor. İstanbul’da ise kar cuma gününden itibaren etkili olacak.</p>";
							
							}
						}
					?>
				</div>
				
				
			</div>
		</section>
	</body>
</html>