
<select name='bulan'>
<option disabled selected hidden>bulan</option>
<?php
for ($m=1; $m<=12; ++$m){
	?>
	<option value =" 
	<?php echo date('F', mktime(0, 0, 0, $m, 1));?> ">
	<?php echo date('F', mktime(0, 0, 0, $m, 1));?>
	</option>
	<?
	}
	?>
	</select>