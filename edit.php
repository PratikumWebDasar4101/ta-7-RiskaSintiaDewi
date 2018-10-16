<?php  

include 'db.php';
$nim=$_GET['nim'];
$form=mysqli_query($conn, "SELECT * FROM form WHERE nim='$nim'");
$row=mysqli_fetch_array($form);
$fakultas=array('Manajemen Informatika','Sistem Multimedia','DKV','Ilmu Komunikasi','MBTI','Teknik Komputer');

function acive_radio_button($value,$input){
	$result = $input==$result?'checked':'';
	return $result;
}	

?>

<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
			<table border="0">
	<form action="update.php" method="POST">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama'];?>"><br></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" value="<?php echo $row['nim'];?>"size="10"><br></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>">Pria
					<input type="radio" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'];?>"><br>Wanita <br></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><select name="jurusan" value="<?php echo $row['jurusan'];?>"><br>
					<option value="MI">Manajemen Informatika</option>
					<option value="SisMul">Sistem Multimedia</option>
					<option value="DKV">DKV</option>
					<option value="Ikom">Ilmu Komunikasi</option>
					<option value="MBTI">MBTI</option>
					<option value="TK">Teknik Komputer</option>
					</select></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="fakultas" value="<?php echo $row['fakultas'];?>"><br>
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal" value="<?php echo $row['asal'];?>"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea name="moto_hidup" value="<?php echo $row['moto_hidup'];?>"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="kirim" value="Kirim"></td>
			</tr>
		</form>
	</table>
</body>
</html>