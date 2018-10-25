<!DOCTYPE html>
<html>

     <head> <title>RadenBeii91</title>

     	<style type="text/css">
           	table, th, td { 
     		border: 1px solid gold;
     	}
      

</style>

</head>

<body>

<table>

   <tr>
   	         <th>NO</th>
   	         <th>NRP</th>
   	         <th>Nama</th>
             <th>Satuan</th>
             <th>Jabatan</th>
   </tr>


   	<?php

    $variable_nrp='Nrp';
    $variable_nama='Nama';
    $variable_satuan='Satuan';
     $variable_jabatan='Jabatan';

    for ($x=1; $x <=100; $x++){
  echo "<tr>
        <td>$x</td>
        <td>$variable_nrp - $x </td>
        <td>$variable_nama - $x </td>
        <td>$variable_satuan - $x </td>
        <td>$variable_jabatan - $x </td>
        </tr>";
}

?>

   		
</table>
</body>
</html>