<!DOCTYPE html>
<html>
<head>
	<title>Form Input Transaksi</title>
</head>
<body style="background: url(photo.jpg);background-size:cover;background-attachment: fixed;"><div class="wrap">
<form action="outputtugas.php" method="POST">
<table width="400" border=”1″ cellpadding="3">
	<td colspan="2" align="center">Form Pembelian Bunga</td>
	<tr>
	<td>Nama Pembeli</td>
	<td><input type="text" name="nama" maxlength="50"></td>
	</tr>
	<tr>
	<td>Kode Transaksi</td> 
	<td><select name="kode">
				<option value="-Pilih-">Pilih</option>
				<option value="000005">000005</option>
				<option value="000006">000006</option>
				<option value="000007">000007</option>
				<option value="000008">000008</option>
				<option value="000009">000009</option>
				<option value="000010">000010</option>
				<option value="000011">000011</option>
				<option value="000012">000012</option>
				<option value="000013">000013</option>
				<option value="000014">000014</option>
				<option value="000015">000015</option>
				<option value="000016">000016</option>
				<option value="000017">000017</option>
				<option value="000018">000018</option>
				<option value="000019">000019</option>
				</select>
	</td>
	</tr>
	<tr>
	<td>Alamat</td>
	<td><input type="text" name="alamat" maxlength="50"></td>
	</tr>
	<tr>
	<td>jumlah beli</td>
	<td><input type="text" name="jumlah" maxlength="100"></td>
				 <br>
	</tr>
	<tr>
	<td colspan="2" align="center" width="60" height="60"><input type="submit" value="Save"><input type="reset" value="Reset"></td>
	</tr>
</table>
</form>
</body>
</html>