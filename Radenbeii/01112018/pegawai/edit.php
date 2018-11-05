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

if (isset($_GET['nrp'])) {
	$nrp1 = $_GET['nrp'];
} else {
	die ("Error. No Nrp Selected! ");	
}

$query = "SELECT * FROM pegawai";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
        $nrp = $hasil['nrp'];
		$nama = stripslashes ($hasil['nama']);
		list($thn,$bln,$tgl) = explode ("-",$hasil['tgllahir']);
		$jenkel = ($hasil['jenkel']==0)?"Laki-laki" : "Wanita";
		$pangkat = ($hasil['pangkat']);
		$korps = ($hasil['korps']);
		$kesatuan = ($hasil['kesatuan']);
		$jabatan = ($hasil['jabatan']);
        $matra = ($hasil['matra']);
    	$alamat = stripslashes ($hasil['alamat']);
    	$namafoto = stripslashes ($hasil['namafoto']);
		$foto = $hasil['namafoto'];
// $nrp = $hasil['nrp'];  
// $nama = stripslashes ($hasil['nama']);
// $jenkel = $hasil['jenkel'];
// list($thn,$bln,$tgl) = explode ("-",$hasil['tgllahir']);
// $alamat = stripslashes ($hasil['alamat']);
// $namafoto = stripslashes ($hasil['namafoto']);
// $foto = $hasil['namafoto'];

//proses edit
if (isset($_POST['Edit'])) {
	$nrp = $_POST['nrp'];
	$nama = addslashes (strip_tags ($_POST['nama']));
	$tgllahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
	$jenkel = $_POST['jenkel'];
	$pangkat = $_POST['pangkat'];
	$korps = $_POST['korps'];
	$kesatuan = $_POST['kesatuan'];
	$jabatan = $_POST['jabatan'];
	$matra = $_POST['matra'];
	$alamat = addslashes (strip_tags ($_POST['alamat']));
	$namafoto = $_FILES['foto']['name'];
	if (strlen($namafoto)>0) {
		//upload
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file ($_FILES['foto']['tmp_name'], "images/".$namafoto);
			mysql_query ("UPDATE pegawai SET namafoto='$namafoto' WHERE nrp='$nrp' ");
		}
	}
	//update data
	$query = "UPDATE pegawai SET nama='$nama',tgllahir='$tgllahir',jenkel='$jenkel',pangkat='$pangkat',korps='$korps',kesatuan='$kesatuan',
			  jabatan='$jabatan',matra='$matra',alamat='$alamat' WHERE nrp='$nrp'";
	// print_r($query);
	// die();
	$sql = mysql_query ($query);
	if ($sql) {
			echo"<script>alert('Data Pegawai telah berhasil diedit !',document.location.href='index.php')</script>";
	} else {
			echo"<script>alert('Data Pegawai gagal diedit !',document.location.href='index.php')</script>";
	}
}
?>
<div id="content">
	<h2 align="center">Edit Data Pegawai</h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="950">
			
			
			<tr>
				<td>NRP</td>
				<td>: <input type="text" name="nrp" value="<?php echo $nrp1; ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="nama" size="30" maxlength="30" value="<?php echo $nama; ?>"></td>
				<td rowspan="4"><?php echo "<img src='images/$foto' width='180' height='180'/>"; ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>: 
				<select name="tgl">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						$sele = ($tg==$tgl)? "selected" : "";
						echo "<option value='$tg' $sele>$tg</option>";	
					}
				?>
				</select> - 
				<select name="bln">
				<?php
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						$sele = ($bl==$bln)?"selected" : "";
						echo "<option value='$bl' $sele>$bl</option>";	
					}
				?>
				</select> - 
				<select name="thn">
				<?php
					for ($i=1970; $i<=2000; $i++) {
						$sele = ($i==$thn)?"selected" : "";
						echo "<option value='$i' $sele>$i</option>";	
					}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>: <input type="radio" name="jenkel" value="0" <?php echo ($jenkel==0)?"checked":""; ?>> Pria &nbsp;&nbsp;
				<input type="radio" name="jenkel" value="1" <?php echo ($jenkel==1)?"checked":""; ?>> Wanita</td>
			</tr>
			<tr>
				<td>PANGKAT</td>
				<td>: <input type="text" name="pangkat" value="<?php echo $pangkat; ?>" readonly></td>
			</tr>
			<tr>
				<td>KORPS</td>
				<td>: <input type="text" name="korps" value="<?php echo $korps; ?>" readonly></td>
			</tr>
			<tr>
				<td>KESATUAN</td>
				<td>: <input type="text" name="kesatuan" value="<?php echo $kesatuan; ?>" readonly></td>
			</tr>
			<tr>
				<td>JABATAN</td>
				<td>: <input type="text" name="jabatan" value="<?php echo $jabatan; ?>" readonly></td>
			</tr>
			<tr>
				<td>MATRA</td>
				<td>: 
				<input type="radio" name="matra" value="0" <?php echo ($matra==0)?"checked":""; ?>> TNI AD &nbsp;&nbsp;
				<input type="radio" name="matra" value="1" <?php echo ($matra==1)?"checked":""; ?>> TNI AL &nbsp;&nbsp;
				<input type="radio" name="matra" value="2" <?php echo ($matra==2)?"checked":""; ?>> TNI AU &nbsp;&nbsp;
			</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>: <input type="text" name="alamat" value="<?php echo $alamat; ?>" readonly></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>: <input type="file" name="foto"/></td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;
				<input type="hidden" name="hnrp" value="<?php echo $nrp; ?>">
				<input type="submit" name="Edit" value=" Simpan ">&nbsp;
				<input type="reset" name="reset" value=" Reset ">&nbsp;
				<a href="index.php"><input type="button" name="" value=" Kembali "/></a></td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</FORM>
</div>