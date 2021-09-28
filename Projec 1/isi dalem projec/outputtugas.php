<!DOCTYPE html>
<html>
<head>
	<title>Struk Pembelian Bunga</title>
</head>
<body style="background: url(poto.jpg);background-size:cover;background-attachment: fixed;"><div class="wrap">
<body>
	<?php
	$nama=$_POST["nama"];
	$kode=$_POST["kode"];
	$alamat=$_POST["alamat"];
	$jumlah=$_POST["jumlah"];
	$tanggal=date('d-M-Y');
	?>

<?php
if ($kode=="000005")
{
	$judul = "Bunga Anggrek";
	$pengarang = "RizkiMahendra";
	$harga = "19000";
}
else if ($kode=="000006") 
{
	$judul = "Bunga Mawar";
	$pengarang = "Adelia";
	$harga = "26000";
}
else if ($kode=="000007")
{
	$judul = "Bunga Melati";
	$pengarang = "Anggi";
	$harga = "65000";	
}
else if ($kode=="000008")
{
	$judul = "Bunga Asoka";
	$pengarang = "Dinny";
	$harga = "20000";
}
else if ($kode=="000009") 
{
	$judul = "Bunga Kamboja";
	$pengarang = "Aing Saha";
	$harga = "28000";
}
else if ($kode=="000010")
{
	$judul = "Bunga Kembang Sepatu";
	$pengarang = "Dadada";
	$harga = "40000";
}
else if ($kode=="000011")
{
	$judul = "Bunga Alamanda";
	$pengarang = "Digidaw";
	$harga = "70000";
}
else if ($kode=="000012") 
{
	$judul = "Bunga Kemuning";
	$pengarang = "Asep";
	$harga = "71000";
}
else if ($kode=="000013")
{
	$judul = "Bunga Lili";
	$pengarang = "Agus";
	$harga = "72000";
}
else if ($kode=="000014")
{
	$judul = "Bunga Amarilis";
	$pengarang = "Atun";
	$harga = "73000";
}
elseif ($kode=="000015") 
{
	$judul = "Bunga Kenanga";
	$pengarang = "Cinta";
	$harga = "74000";
}
else if ($kode=="000016")
{
	$judul = "Bunga Tapak Dara";
	$pengarang = "Eman";
	$harga = "75000";
}
else if ($kode=="000017")
{
	$judul = "Bunga Lavender";
	$pengarang = "Ami";
	$harga = "76000";
}
elseif ($kode=="000018") 
{
	$judul = "Bunga Bougenville";
	$pengarang = "Agil";
	$harga = "77000";
}
elseif ($kode=="000019")
{
	$judul = "Bunga Bangke";
	$pengarang = "Atun";
	$harga = "78000";								
}				
?>

<?php
$total=$jumlah*$harga;
?>
STRUK PEMBELIAN BUNGA<br>
Tanggal   : <?php echo $tanggal; ?><br>
Nama Toko : <?php echo $nama; ?><br>
<hr><br>
Judul Barang    : <?php echo $judul; ?><br>
Pembeli	        : <?php echo $pengarang; ?><br>
Alamat Pembeli 	: <?php echo $alamat; ?><br>
Harga Bunga	    : <?php echo $harga; ?><br>
<hr><br>
Jumlah beli	 : <?php echo $jumlah; ?><br>
Total Bayar  : <?php echo $total; ?><br>
<hr><br>
<a href="inputtugas.php">PEMBAYARAN LUNAS</a>
</body>
</html>