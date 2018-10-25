<!DOCTYPE html>
<html>

     <head> <title>Latihan Tabel Pertama Ndoro</title>
     	<style type="text/css">
     	table, th, td {
     		border: 1px solid black;
     	}
</style>
</head>
<body>
<table>
   <tr>
   	<th>NO</th>
   	   <th>NRP</th>
   	   <th>Nama</th>
   	</tr>


   	<?php

    $variable_nrp='nrp';
    $variable_nama='nama';

    for ($x=1; $x <=10; $x++){
  echo "<tr>
        <td>$x</td>
        <td>$variable_nrp - $x </td>
        <td>$variable_nama - $x </td>
        </tr>";
}

?>

   		
</table>
</body>
</html>