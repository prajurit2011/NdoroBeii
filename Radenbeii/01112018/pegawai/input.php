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
    font-family: verdana;
    font-size: 20px;
}
</style>
</head>
<body>



</body>
</html>

<?php

include "koneksi.php";

//proses input
if (isset($_POST['Input'])) {
	$nrp = addslashes (strip_tags ($_POST['nrp']));
	$nama = addslashes (strip_tags ($_POST['nama']));
	$tahun = $_POST['thn'];
	$bulan = $_POST['bln'];
	$tanggal = $_POST['tgl'];
	$tgllahir = $tahun."-".$bulan."-".$tanggal;
	$jenkel = $_POST['jenkel'];
	$pangkat = $_POST['pangkat'];
	$korps = $_POST['korps'];
	$kesatuan = $_POST['kesatuan'];
	$jabatan = $_POST['jabatan'];
	$matra = $_POST['matra'];
	$alamat = addslashes (strip_tags ($_POST['alamat']));
	$namafoto = $_FILES['foto']['name'];

	// $jenkel = $_POST['jenkel'];
	// $alamat = addslashes (strip_tags ($_POST['alamat']));
	// $namafoto = $_FILES['foto']['name'];
	
	// if (strlen ($nrp) != 18) {
	// 	echo"<script>alert('NRP harus 18 digit !',document.location.href='index.php?page=input')</script>";	
	// }

	if (strlen($namafoto)>0) {
		//upload
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file ($_FILES['foto']['tmp_name'], "images/".$namafoto);
		}
	}
	//insert ke tabel
	$query = "INSERT INTO pegawai VALUES('$nrp','$nama','$tgllahir','$jenkel','$pangkat','$korps','$kesatuan','$jabatan','$matra','$alamat','$namafoto')";
	$sql = mysql_query ($query) or die (mysql_error());
	if ($sql) {
			echo"<script>alert('Data Pegawai telah berhasil ditambahkan !',document.location.href='index.php')</script>";
	} else {
			echo"<script>alert('Data Pegawai gagal ditambahkan !',document.location.href='index.php')</script>";
	}
}
?>
<div id="content">
	<h2 align="center">Input Data Pegawai</h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="950">
			
			<tr>
				<td width="200">NRP</td>
				<td>: <input type="text" name="nrp" size="18" maxlength="18" placeholder="NRP"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="nama" size="30" maxlength="30" placeholder="Nama Lengkap"></td>

			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>: 
				<select name="tgl">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
				</select> - 
				<select name="bln">
				<?php
					for ($j=1; $j<=12; $j++) {
						$bl = ($j<10) ? "0$j" : $j;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
				</select> - 
				<select name="thn">
				<?php
					for ($k=1970; $k<=2000; $k++) {
						echo "<option value='$k'>$k</option>";	
					}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>: <input type="radio" name="jenkel" value="0" checked> Pria &nbsp;&nbsp;
				<input type="radio" name="jenkel" value="1"> Wanita</td>
			</tr>
			<tr>
				<td>Pangkat</td>
				<td>: <input type="text" name="pangkat" size="30" maxlength="30" placeholder="Pangkat"></td>
			</tr>
			<tr>      
				<td>Korps</td>
				<td>: <input type="text" name="korps" size="30" maxlength="30" placeholder="Korps"></td>
			</tr>
			<tr>
				<td>Kesatuan</td>
				<td>: <input type="text" name="kesatuan" size="30" maxlength="30" placeholder="Kesatuan"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>: <input type="text" name="jabatan" size="30" maxlength="30" placeholder="Jabatan"></td>
			</tr>
			<tr>
				<td>Matra</td>
				<td>: <input type="radio" name="jenkel" value="0" checked> TNI AD &nbsp;&nbsp;
					  <input type="radio" name="jenkel" value="1" checked> TNI AL &nbsp;&nbsp;
					  <input type="radio" name="jenkel" value="2"> TNI AU</td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>: <textarea name="alamat" cols="40" rows="3" placeholder="Alamat Lengkap"></textarea></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>: <input type="file" name="foto"/></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;<input type="submit" name="Input" value=" Simpan ">&nbsp;
				<input type="reset" name="reset" value=" Reset ">&nbsp;
				<a href="index.php"><input type="button" name="" value=" Kembali "/></a></td>
			</tr>
		</table>
	</FORM>
	<h1> Mohon Perhatikan Baik-Baik Bila mengisi Formulir Penambahan Pers..
		<br> dikarenakan bila Salah anda harus diwajibkan mengedit 1 persatu..
		<br> bila tidak tahu bisa ditanyakan ke myadmin 
		<br> email : prajurit2011@gmail.com atau callcenter 082297600061</h1>
</div>