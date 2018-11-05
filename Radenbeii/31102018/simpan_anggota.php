<html>
<head>
	<title>.:: Simpan Data ::.</title>
</head>
<body>
<font face=arial size=2>
<center><h5>DATA BERHASIL DITAMBAHKAN KE TABEL ANGGOTA</h5></center>
<hr>
<?php
// ----- ambil isi dari file koneksi.php
require("koneksi.php");
// ----- hubungkan ke database
$koneksi=open_connection();
// ----- menentukan nama tabel
$tablename="anggota";
// ----- menghitung jumlah record
$sql1="select * from $tablename";
$hasil =@mysql_query ($sql1) or die ("Terdapat kesalahan pada perintah SQL!");
$jml=@mysql_num_rows($hasil);
$nomor=$jml+1; 
$NAMA=$_POST['nama'];
$EMAIL=$_POST['email'];
$ALAMAT=$_POST['alamat'];
$KOTA=$_POST['kota'];
$KETERANGAN=$_POST['keterangan'];

// ----- perintah SQL untuk memasukkan data ke tabel anggota
$sql2="insert into $tablename(NAMA,EMAIL,ALAMAT,KOTA,KETERANGAN) values ('$NAMA','$EMAIL','$ALAMAT','$KOTA','$KETERANGAN')";
// ------ jalankan perintah SQL untuk memasukkan data ke tabel anggota

$hasil =@mysql_query ($sql2) or die ("Terdapat kesalahan pada perintah SQL!");
// ------ putus hubungan dengan database
mysql_close($koneksi);
?>
<center>
| <a href=contoh2_23.php target=_blank>Lihat Data</a>
| <a href=contoh2_26.html>Kembali</a> |
</body>
</html>
