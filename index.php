<?php
	// Memasukkan file db.php dan submit.php
	include "db.php";
	include "submit.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PESANMU</title>
		<meta name="description" content="KIRIM PESANMU UNTUK DIA">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/x-icon" href="icon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="main">
		<!-- Membuat header dan tombol -->
		<div id="top">
			<h1 class="judul"><a href="index.php" class="link">PESANMU</a></h1>
			<h2 class="des">KIRIM PESANMU UNTUK DIA</h2>
		</div>

		<!-- Memunculkan jendela pop up kirim pesan -->
		<div class="tombol" onclick="openPopup()">Kirim Pesan</div>
<?php
	// Memasukkan file main.php
	include "main.php";
?>
		</div>

		<!-- Membuat Tombol Back to top-->
		<div id="btp" class="hidden">
			<a href="#top">Kembali Ke Atas</a>
		</div>

		<!-- Membuat jendela pop up kirim pesan -->
		<div id="popup" class="hidden">
			<div class="middle">
				<div class="inner">
					<!-- Saat di klik, pop up akan menghilang -->
					<div class="close" onclick="closePopup()">×</div>
					<form action="index.php" method="post" class="krmpesan">
						<input type="text" name="dari" placeholder="Dari" required>
						<input type="text" name="untuk" placeholder="Untuk" required>
						<textarea name="pesan" placeholder="Pesan" required></textarea>
						<input type="submit" name="submit" value="Kirim">
					</form>
				</div>
			</div>
		</div>

		<!-- Script untuk segala macam event javascript-->
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript">

		</script>
	</body>
</html>