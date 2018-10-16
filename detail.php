<?php  

session_start();
include 'db.php';
$nim=$_GET['nim'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>"."</td>";

	?>
	<br><a href="formmahasiswabaru.php">Tambah Data &nbsp;&nbsp; </a>
	<table>
		<form>
		<?php  
		
		$sql="SELECT * FROM form WHERE nim='$nim'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);

		echo "<tr>";
		echo "<td>"."<b>FORM</b>"."<br><br></td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td colspan=4>"."Nama : ".$row['nama']."<br>";
		echo "NIM : ".$row['nim']."<br>";
		echo "Jenis Kelamin : ".$row['jenis_kelamin']."<br>";
		echo "Program Studi : ".$row['jurusan']."<br>";
		echo "Falkultas : ".$row['fakultas']."<br>";
		echo "Asal : ".$row['asal']."<br>";
		echo "Moto Hidup : ".$row['moto_hidup']."<br>";
		echo "</tr>";

		mysqli_close($conn);

		?>
		</form>
	</table>
</body>
</html>