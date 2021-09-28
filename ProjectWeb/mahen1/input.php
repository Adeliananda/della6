<!DOCTYPE html>
<html>
<head>
	<title>Form Input Transaksi</title>
</head>
<body style="background: url(kontak.jpg);background-size:cover;background-attachment: fixed;"><div class="wrap">
<form action="output.php" method="POST">
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
				<option value="bouquet1">bouquet1</option>
				<option value="bouquet2">bouquet2</option>
				<option value="bouquet3">bouquet3</option>
				<option value="bouquet4">bouquet4</option>
				<option value="bouquet5">bouquet5</option>
				<option value="bouquet6">bouquet6</option>
				<option value="bouquet7">bouquet8</option>
				<option value="bouquet8">bouquet8</option>
				<option value="bouquet9">bouquet9</option>
				<option value="bouquet10">bouquet10</option>
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