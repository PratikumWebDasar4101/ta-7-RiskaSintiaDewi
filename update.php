<?php  

session_start();
include 'db.php';

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jurusan=$_POST['jurusan'];
$fakultas=$_POST['fakultas'];
$asal=$_POST['asal'];
$moto_hidup=$_POST['moto_hidup'];

$sql = "UPDATE form SET nama='$nama', nim='$nim', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', fakultas='$fakultas', asal='$asal', moto_hidup='$moto_hidup'";

if (mysqli_query($conn, $sql)){
	header("Location:detail.php");
	}else{
		echo "Error, :".$sql."<br>".mysqli_error($conn);
	}

?>