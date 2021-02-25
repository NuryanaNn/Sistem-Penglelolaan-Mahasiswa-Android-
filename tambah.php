<?php
session_start();

if(!isset($_SESSION["login"])){
	header("Location:login.php");
	exit;
	}





require 'functions.php';
//cek apakah tombol sudah ditekan
if(isset($_POST["submit"])){

	 

//cek apakah data berhasil ditambahkan
	if(tambah($_POST)>0){
		echo "
				<script>  
					alert('Data Berhasil Ditambahkan');
					document.location.href ='index.php';
				</script>
				";
	}else{
		echo "
				<script>  
					alert('Data Gagal Ditambahkan');
					document.location.href ='index.php';
				</script>
				";
	}
}
?>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nim">Nim :</label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="email" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>

</body>
</html>