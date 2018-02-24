<!-- Isi komentar dari tiap pesan-->
<div class="komentar">
<?php
		// Mengecek apabila ada komentar dari suatu pesan dan menampilkan semua komentar
		$datid = $data['id'];
		if($cekom = mysqli_query($conn,"SELECT * FROM dududu WHERE reply='$datid'")) {
			while($komen = mysqli_fetch_array($cekom,MYSQLI_ASSOC)) { ?>
<div class="isikomen">
	<i><?php echo $komen['pesan']; ?></i>
</div>
<?php
}
}
?>
<!-- Form untuk mengirim komentar-->
<form action="index.php" method="post" class="komen">
	<input type="hidden" name="reply" value="<?php echo $datid ?>">
	<textarea name="pesan" placeholder="Masukkan Komentar" required></textarea>
	<input type="submit" name="submit" value="Kirim Komentar">
</form>
</div>