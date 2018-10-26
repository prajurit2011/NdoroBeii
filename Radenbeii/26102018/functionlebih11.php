<?php

function nama_bulan($bulan, $tahun){
	   echo $bulan . ' '. $tahun;
	   echo '<br>';
}
for ($x=2015; $x<=2019; $x++){
	// ingin menampilkan berulang penulisan menggunakan for
     nama_bulan('Oktober', $x);
}
?>