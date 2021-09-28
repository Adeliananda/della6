<!DOCTYPE html>
<html>
<head>
	<title>Struk Pembelian</title>
</head>
<body>
	<?php
	$nama=$_POST["nama_pembeli"];
	$kode=$_POST["kd"];
	$jumlah=$_POST["jumlah"];
	$tanggal=date('d-M-Y');
	?>

<?php
if ($kode=="B0001")
{
	$judul = "MS.Acces 2010";
	$pengarang = "Kurnia";
	$harga = "19500";
}
elseif ($kode=="B0002") 
{
	$judul = "PHP & MySQL untuk orang awam";
	$pengarang = "M. Irmansyah";
	$harga = "26500";
}
else
{
	$judul = "Web Untuk Bisnis";
	$pengarang = "Kadir";
	$harga = "65000";
}
?>

<?php
$total=$jumlah*$harga;
?>
STRUK PEMBELIAN BARANG SEDERHANA<br>
Tanggal : <?php echo $tanggal; ?><br>
Nama : <?php echo $nama; ?><br>
<hr><br>
Judul Buku   : <?php echo $judul; ?><br>
Pengarang	 : <?php echo $pengarang; ?><br>
Harga Buku	 : <?php echo $harga; ?><br>
<hr><br>
jumlah beli	 : <?php echo $jumlah; ?><br>
Total Bayar  : <?php echo $total; ?><br>
<hr><br>
<a href="Inputtugas.php">Tambah Data Penjualan</a>
</body>
</html>