<?php
	// Ini adalah file untuk mengatur database
	// Hapus file ini jika sudah berhasil menginstal Pesanmu
	include 'db.php';
	$hubungkan = new mysqli($host,$username,$password,$name);

	$buattabel = "CREATE TABLE dududu (
	id INT(100) AUTO_INCREMENT PRIMARY KEY,
	dari VARCHAR(100),
	untuk VARCHAR(100),
	pesan TEXT,
	reply INT(100)
	)";

	if($hubungkan -> query($buattabel) === TRUE) {
		echo "Berhasil Membuat Database, silakan hapus atau rename file setting.php <br>";
		echo "<a href='index.php'>Klik disini untuk menuju website</a>";
	}
	else {
		echo "Gagal membuat database, silakan cek kembali db.php untuk setting database";
	}
	$hubungkan->close();
?>