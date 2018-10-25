<subtitle<subtitle style="
    background-color: #00BCD4;
">DAFTAR NAMA PASIEN RSJ</subtitle><br><br>

<?php 
 $siswa=array(
   "Painem" => array(
     "Kelamin" => "Woman",
     "Status" => "Ga Laku"
    ),
   "Khamdan" => array(
     "Kelamin" => "Undenfined",
     "Status" => "Menikah"
    ),
   "SuSan" => array(
     "Kelamin" => "Undefined",
     "Status" => "Undenfined"
    )
  );
 $jadijson=json_encode(array('mabes_tni'=>$siswa));
 $jadiinjsonkearray=json_decode($jadijson,TRUE);
 ?>
<table width="100%" border="1px" border-color='#707070'>
  <tr>
   <td><b>Nama</b></td>
   <td><b>Kelamin</b></td>
   <td><b>Status</b></td>
  </tr>
<?php 
 foreach ($jadiinjsonkearray['mabes_tni'] as $key => $value) {
 ?>
  <tr>
   <td><?php echo $key; ?></td>
   <td><?php echo $value['Kelamin']; ?></td>
   <td><?php echo $value['Status']; ?></td>
  </tr>
<?php } ?>
 </table>
