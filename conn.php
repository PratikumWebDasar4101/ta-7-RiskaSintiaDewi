<?php  

include 'db.php';

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jurusan=$_POST['jurusan'];
$fakultas=$_POST['fakultas'];
$asal=$_POST['asal'];
$moto_hidup=$_POST['moto_hidup'];

$sql = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin, jurusan, fakultas, asal, moto_hidup)
VALUES ('$nama','$nim','$jenis_kelamin','$jurusan','$fakultas','asal','moto_hidup')";

if (mysqli_query($conn, $sql)){
	echo("Berhasil Terhubung kedatabase 6701174039");
	}else{
		echo "Gagal terhubung kedatabase!!!!";
	}

mysqli_close($conn);

?>