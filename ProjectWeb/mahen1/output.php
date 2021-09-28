<!DOCTYPE html>
<html>
<head>
	<title>Struk Pembelian Bunga</title>
</head>
<body style="background: url(kontak.jpg);background-size:cover;background-attachment: fixed;"><div class="wrap">
<body>
	<?php
	$nama=$_POST["nama"];
	$kode=$_POST["kode"];
	$alamat=$_POST["alamat"];
	$jumlah=$_POST["jumlah"];
	$tanggal=date('d-M-Y');
	?>

<?php
if ($kode=="bouquet1")
{
	$judul = "bouquet1";
	$harga = "190000";
}
else if ($kode=="bouquet2") 
{
	$judul = "bouquet2";
	$harga = "260000";
}
else if ($kode=="bouquet3")
{
	$judul = "bouquet3";
	$harga = "300000";	
}
else if ($kode=="bouquet4")
{
	$judul = "bouquet4";
	$harga = "320000";
}
else if ($kode=="bouquet5") 
{
	$judul = "bouquet5";
	$harga = "250000";
}
else if ($kode=="bouquet6")
{
	$judul = "bouquet6";
	$harga = "270000";
}	
else if ($kode=="bouquet7") 
{
	$judul = "bouquet7";
	$harga = "290000";
}
else if ($kode=="bouquet8")
{
	$judul = "bouquet8";
	$harga = "155000";	
}
else if ($kode=="bouquet9")
{
	$judul = "bouquet9";
	$harga = "165000";
}
else if ($kode=="bouquet10") 
{
	$judul = "bouquet10";
	$harga = "170000";
}
?>

<?php
$total=$jumlah*$harga;
?>
STRUK PEMBELIAN BUNGA<br>
Tanggal : <?php echo $tanggal; ?><br>
Paradise Florist<br>
<hr><br>
Judul Barang   : <?php echo $judul; ?><br>
Pembeli	 : <?php echo $nama; ?><br>
Alamat 	: <?php echo $alamat; ?><br>
Harga Bunga	 : <?php echo $harga; ?><br>
<hr><br>
Jumlah beli	 : <?php echo $jumlah; ?><br>
Total Bayar  : <?php echo $total; ?><br>
<hr><br>
<a href="input.php">PEMBAYARAN LUNAS</a>
</body>
</html>