<?php
		// Memunculkan semua pesan yang ada di database, Jika ada pesan jalankan perintah
		if($cmd = mysqli_query($conn,"SELECT * FROM dududu ORDER BY id DESC")) {
		while($data = mysqli_fetch_array($cmd,MYSQLI_ASSOC)) {
			// Memeriksa data di tabel, jika tidak ada reply maka itu pesan utama
			if($data['reply']==NULL) {	
	?>
<!-- Isi utama dari website -->
<div class="pesan">
	<span>
		<b>Dari</b>: <?php echo $data['dari'] ?>
	</span>
	<span>
		<b>Untuk</b>: <?php echo $data['untuk'] ?>
	</span>
	<span>
		<b>Isi Pesan</b>: <?php echo $data['pesan'] ?><br>
	</span>
</div>
<?php
	// Memasukkan file comment.php
	include 'comment.php';
		}
	}
}
?>