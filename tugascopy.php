<?php
$a="5";
$b="2.5";
$komentar="Selamat Datang di PHP";
echo ("Nilai variable a adalah = $a <br>");
echo ("Nilai variable b adalah = $b <br>");
echo ("Nilai variable komentar adalah = $komentar<br>");
$hasil=$a+$b;
echo ("Hasil jumlah a dan b adalah = $hasil <br>");
$tgl=date("d F Y");
$nama="Mabes TNI";
$garis="======================================";
echo "<p>";
echo $garis."<br>";
echo $komentar." Di Kelas Pemrograman ". $nama. "<br>Belajar dengan giat ya....<br>";
echo $garis."<br>";
echo "Tanggal ".$tgl;
?>