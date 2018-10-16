<html>
<head>
<title>Variabel dalam php</title>
<body>
<?php
//variabel bertipe integer
$a="5";
//variabel bertipe real
$b="2.5";
//variabel bertipe string
$komentar="Selamat datang di PHP";
echo ("Nilai variabel a adalah = $a <br>");
//variabel bertipe integer
echo ("Nilai variabel b adalah = $a <br>");
//variabe; bertipe real
echo ("Nilai variabel komentar adalah = $hasil <br>");
//variabel bertipe string
$hasil=$a+$b
echo ("Hasil jumlah a dan b adalah = $hasil <br>");
//variabel bertipe double
$tgl = date("d F Y");
$nama = "Mabes TNI";
$garis="==========================";
echo "<p>";
echo $garis. "<br>";
echo $komentar. "Di Kelas Pemrograman".$nama."<br>Belajar dengan giat ya......<br>";
echo $garis."<br>";
echo "tanggal ".$tgl;
?>
