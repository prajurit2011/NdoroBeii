<html>
<body>

     <?php

         $variable_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"); 

         $panjang_array = count($variable_bulan);

for($x = 0; $x < $panjang_array; $x++){
	  echo $variable_bulan[$x];
	  echo "<br>";
}
?>

</body>
</html>