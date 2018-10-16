<?php  

session_start();
include 'db.php';

?>
<html>
<head>
	<form action="search.php" method="POST">
		<br><a href="formmahasiswabaru.php">Tambah Data <br><br></a>
		<input type="text" name="nim" placeholder="Cari NIM"> &nbsp;&nbsp;
			<input type="submit" value="Cari"><br>
		<table border="1">
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Action</th>
			</tr>
</head>
<body>
<?php

$sql = "SELECT * FROM form";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$nim=$row['nim'];
		echo "<tr>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['nim']."</td>";

		echo "<td>"."<a href='delete.php?nim=$nim'>Delete</a>|<a href='detail.php?nim=$nim'>Detail</a>"."</td>";			

		echo "</tr>";
	}
}else{
	echo "0 result";
}
mysqli_close($conn);

?>
</body>
</table>
</html>