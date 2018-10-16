<?php  

$db = new mysqli("localhost","root","","mahasiswa");

$nim=$_POST['nim'];
$sql="SELECT * FROM form WHERE nim like '%$nim%'";
$result=mysqli_query($db,$sql);
$row=mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><a href="formmahasiswabaru.php">Tambah Data <br><br></a>
	<table border="1">
			<thead>
				<th>Nama</th>
				<th>NIM</th>
				<th>Action</th>
			</thead>
			<tbody>
		<?php
		if($row>0){
			while($row=mysqli_fetch_assoc($result)){
				$nim=$row['nim'];
				echo "<tr>";
				echo "<td>".$row['nama']."</td>";
				echo "<td>".$row['nim']."</td>";
				echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a>|<a href='detail.php?nim=$nim'>Detail</a>"."</td>";			
				echo "</tr>";
		}
		} else{
	echo "0 result";
}
?>
</tbody>
</table>
</body>
</html>
		