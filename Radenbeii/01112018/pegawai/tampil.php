<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: lightblue;
}

h1 {
    color: black;
    text-align: center;
}

p {
    font-family: tahoma;
    font-size: 20px;
}
</style>
</head>
<body>



</body>
</html>

<?php
include "koneksi.php";
?>
<div id="content">
	<h2 align="center">Data Pegawai</h2>
	<a href="index.php?page=input"><input type="button" name="" value=" Input Data "/></a> 
	<table width="100%" id="dataTables" class="display" cellspacing="2" width="100%">
		<thead>
	<tr>
		<th width="3%">No</th>
		<th width="18%">NRP</th>
		<th width="18%">Nama</th>
		<th width="10%">Tgl Lahir</th>
		<th width="13%">Jenis Kelamin</th>
		<th width="13%">Pangkat</th>
		<th width="13%">Korps</th>
		<th width="13%">Kesatuan</th>
		<th width="13%">Jabatan</th>
		<th width="13%">Matra</th>
		<th width="22%">Alamat</th>
		<th width="10%">Foto</th>
		<th width="6%">Action</th>
	</tr>
</thead>
<tbody>
	<?php
	$no = 1;
	$query = "SELECT * FROM pegawai ORDER BY nrp";
	$sql = mysql_query ($query);
	while ($hasil = mysql_fetch_array ($sql)) {
		$nrp = $hasil['nrp'];
		$nama = stripslashes ($hasil['nama']);
		$tgllhr = stripslashes ($hasil['tgllahir']);
		$jenkel = ($hasil['jenkel']==0)?"Laki-laki" : "Wanita";
		$pangkat = ($hasil['pangkat']);
		$korps = ($hasil['korps']);
		$kesatuan = ($hasil['kesatuan']);
		$jabatan = ($hasil['jabatan']);
        $matra = ($hasil['matra']);
    	$alamat = stripslashes ($hasil['alamat']);
		$foto = $hasil['namafoto'];
		$warna = ($no%2==1)?"#ffffff":"#efefef";

		//tampilkan data pegawai
	?>
		<tr bgcolor="<?php echo $warna; ?>">
			<td><?php echo $no; ?></td>
			<td><?php echo $nrp; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $tgllhr; ?></td>
			<td><?php echo $jenkel; ?></td>
			<td><?php echo $pangkat; ?></td>
			<td><?php echo $korps; ?></td>
			<td><?php echo $kesatuan; ?></td>
			<td><?php echo $jabatan; ?></td>
			<td><?php echo $matra ?></td>
			<td><?php echo $alamat; ?></td>
			<td><?php echo "<img src='images/$foto' width='100' height='100'/>"; ?></td>
			<td> 
			<a href="index.php?page=edit&nrp=<?php echo $nrp; ?>"><input type="button" name="" value=" Edit "/></a><br/>
			<a href="index.php?page=delete&nrp=<?php echo $nrp; ?>" onclick="return confirm('Anda yakin akan menghapus pegawai <?php echo $nama; ?> ?')"><input type="button" name="" value=" Delete "/></a>
		</td>
		</tr>	
	<?php $no++; }?>
</tbody>
	</table>
</div>