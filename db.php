<?php
	// File untuk terhubung ke database

	// Masukkan database host di sini
	$host = "localhost";

	// Masukkan username database di sini
	$username = "root";

	// Masukkan password database di sini
	$password = "";

	// Masukkan nama database di sini
	$name = "kimi";

	$conn = mysqli_connect($host,$username,$password);
	mysqli_select_db($conn,$name);
?>