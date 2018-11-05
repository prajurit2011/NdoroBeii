<html>
<head>
		<title>.:: Menampilkan Data ::.</title>
</head>
<body>
<font face=arial size=2>
<center><h3>DAFTAR ANGGOTA</h3></center>
<?php
// ----- ambil isi dari file koneksi.php
require("koneksi.php");
// ----- hubungkan ke database
$koneksi=open_connection();
// ----- menentukan nama tabel
$tablename="anggota";
// ----- perintah SQL dimasukkan ke dalam variable string
$sql="select * from $tablename";
// ------ jalankan perintah SQL
$result = mysql_query ($sql) or die ("Terdapat kesalahan pada perintah SQL!");
// ------ putus hubungan dengan database
mysql_close($koneksi);
$nomor_urut=1;
// ------ buat tampilan tabel
echo("<table width=100% cellspacing=1 cellpadding=2 bgcolor=#000000>");
echo("<tr><td bgcolor=#CCCCCC><b>No</b></td>
				<td bgcolor=#CCCCCC><b>Nama</b></td>
					<td bgcolor=#CCCCCC><b>E-Mail</b></td>
					<td bgcolor=#CCCCCC><b>Alamat</b></td>
					<td bgcolor=#CCCCCC><b>Kota</b></td>
					<td bgcolor=#CCCCCC><b>Kota</b></td></tr>");
// ------ ambil isi masing-masing record
while ($row = mysql_fetch_object ($result))
{
		// ----- mengambil isi setiap kolom
		$nomor=$row->NOMOR;
		$nama=$row->NAMA;
		$email=$row->EMAIL;
		$alamat=$row->ALAMAT;
		$kota=$row->KOTA;
		$keterangan=$row->KETERANGAN;
		// ------ menampilkan di layar browser
		echo("<tr><td bgcolor=#FFFFFF>".$nomor_urut++."</td>
			<td bgcolor=#FFFFFF>$nama</td>
			<td bgcolor=#FFFFFF>$email</td>
			<td bgcolor=#FFFFFF>$alamat</td>
			<td bgcolor=#FFFFFF>$kota</td>
			<td bgcolor=#FFFFFF>$keterangan</td></tr>");
}
echo("</table>");
?>
</body>
</html>
