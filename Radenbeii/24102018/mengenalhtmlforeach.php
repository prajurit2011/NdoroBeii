
<subtitle<subtitle style="
    background-color: #00BCD4;
">DAFTAR BULAN</subtitle><br><br>

	<?php
	$variable_bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");?>

	<?php
	$variable_tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12");?>


<select name='tanggal'>
   
   <?php
foreach ($variable_tanggal as $value){
	?>
}
<option value = "<?php echo $value; ?>">
	<?php echo $value; ?>
</option>



   
  
<?php
}
?>
</select>

<select name='bulan'>
   
   <?php
foreach ($variable_bulan as $value){
	?>
}
<option value = "<?php echo $value; ?>">
	<?php echo $value; ?>
</option>
  
<?php
}
?>
</select>
