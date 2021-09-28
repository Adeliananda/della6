<!DOCTYPE html>
<html>
<head>
	<title>Form Input Pembelian</title>
</head>
<form action="Outputtugas.php" method="POST">
<table width="400" border=”1″ cellpadding="3">
	<td colspan="2" align="center">Form Pembelian Barang Sederhana</td>
	<tr>
	<td>Nama Pembeli</td>
	<td><input type="text" name="nama_pembeli" maxlength="50"></td>
	</tr>
	<tr>
	<td>Kode Buku</td> 
	<td><select name="kd">
				<option value="-Pilih-">Pilih</option> 
				<option value="B0001">B0001</option>
				<option value="B0002">B0002</option>
				<option value="B0003">B0003</option>
				</select>
	</td>
	</tr>
	<tr>
	<td>jumlah beli</td>
	<td><input type="text" name="jumlah" maxlength="100"></td>
				 <br>
	</tr>
	<tr>
	<td colspan="2" align="center" width="60" height="60"><input type="submit" value="SAVE"><input type="reset" value="RESET"></td>
	</tr>
</table>
</form>
</body>
</html>