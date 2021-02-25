<?php
require 'functions.php';

//ambil data di url
$id =$_GET["id"];

//kueri data berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

//cek apakah tombol sudah ditekan
if(isset($_POST["submit"])){

//cek apakah data berhasil ditambahkan
	if(ubah($_POST)>0){
		echo "
				<script>  
					alert('Data Berhasil DiUbah');
					document.location.href ='index.php';
				</script>
				";
	}else{
		echo "
				<script>  
					alert('Data Gagal DiUbah');
					document.location.href ='index.php';
				</script>
				";
	}
}
?>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<input type ="hidden" name="id" value="<?=$mhs["id"];?>">
		<input type ="hidden" name="gambarLama" value="<?=$mhs["gambar"];?>">
		<ul>
			<li>
				<label for="nim">Nim :</label>
				<input type="text" name="nim" id="nim" value="<?=$mhs["nim"]?>" required >
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" value="<?=$mhs["nama"]?>" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="email" name="email" id="email" value="<?=$mhs["email"]?>">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" value="<?=$mhs["jurusan"]?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label><br>
				<img src="img/<?=$mhs['gambar'];?>"><br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah</button>
			</li>

</body>
</html>