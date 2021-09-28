<!DOCTYPE html>
<html>
<head>
	<title>Input Tugas</title>
</head>
<body>
<b>Form Pembelian Barang Sederhana</b>
<br>
 <form action="Outputtugas.php" method="POST">
 <pre>
Nama Pembeli      :<input type="text" name="nama" maxlength="50">
Kode Buku         :<?php
                   //dekrasi variabel.

                   $nm:('nm');
                   $kd:('kd');
                   $jb:('jb');

                   if (kd=="B0001") 
                   {
                   	$jl="MS.Acces 2010";
                   	$pr="Kurnia";
                   	$hr="19500";
                   }
                   else if (kd=="B0002") 
                   {
                   	$jl="PHP & MySQL untuk orang awam";
                   	$pr="M.Imansyah";
                   	$hr="26500";
                   }
                   else (kd=="B0003") 
                   {
                   	$jl="Web Untuk Bisnis";
                   	$pr="Kadir";
                   	$hr="65500";
                   }
	?></pre>
Jumlah Beli       :<input type="text" name="jumlah beli" maxlength="100">
 
                </br> 
<input type="submit" value="Save"><input type="Reset" value="Reset">
</form>
</body>
</html>