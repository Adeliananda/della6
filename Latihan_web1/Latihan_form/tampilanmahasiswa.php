<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Mahasiswa</title>
</head>
<body>
	<?php
	$nama=$_POST["nama"];
	$alamat=$_POST["alamat"];
	$jeniskel=$_POST["jeniskel"];
	$pekerjaan=$_POST["pekerjaan"];
	$hobi1=$_POST["hobi1"];
	$hobi2=$_POST["hobi2"];
	$hobi3=$_POST["hobi3"];
	?>
<table border="2" bgcolor="cyan">
	<tr>
		<td colspan="2">Data Mahasiswa</td>
		<td></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo $nama; ?> </td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo $alamat; ?> </td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><?php echo $jeniskel; ?> </td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td><?php echo $pekerjaan; ?> </td>
	</tr>
	<tr>
		<td>Hobby</td>
		<td><?php echo $hobi1, "," ,$hobi2, "," ,$hobi3; ?> </td>
	</tr>
</table>
<a href="forminputmahasiswa.php"> INPUT DATA LAGI</a>
</body>;
</html>