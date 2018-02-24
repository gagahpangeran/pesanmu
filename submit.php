<?php
	// Mengirimkan pesan yang sudah disubmit
	if(isset($_POST['submit'])) {
		// Untuk mengirim pesan biasa
		if($_POST['submit'] == 'Kirim') {
			$dari = htmlspecialchars($_POST['dari']);
			$untuk = htmlspecialchars($_POST['untuk']);
			$pesan = htmlspecialchars($_POST['pesan']);

			$cek = mysqli_query($conn,"INSERT INTO dududu(dari,untuk,pesan) VALUES('$dari','$untuk','$pesan')");
			if(!$cek) {
				echo "Gagal Mengirim, Silakan Coba lagi";
			}
		}

		// Untuk mengirim komentar
		else {
			$pesan = htmlspecialchars($_POST['pesan']);
			$reply = htmlspecialchars($_POST['reply']);

			$cek = mysqli_query($conn,"INSERT INTO dududu(pesan,reply) VALUES('$pesan','$reply')");
		}
	}
?>