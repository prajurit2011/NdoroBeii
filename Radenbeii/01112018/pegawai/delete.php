<?php
include "koneksi.php";

if (isset($_GET['nrp'])) {
	$nrp = $_GET['nrp'];
} else {
	die ("Error. No nrp Selected! ");	
}
?>
<div id="content">
	<?php
	//proses delete berita
	if (!empty($nrp) && $nrp != "") {
		$query = "DELETE FROM pegawai WHERE nrp='$nrp'";
		$sql = mysql_query ($query);
		if ($sql) {
			echo"<script>alert('Data Pegawai telah berhasil dihapus !',document.location.href='index.php')</script>";	
		} else {
			echo"<script>alert('Data pegawai gagal dihapus !',document.location.href='index.php')</script>";	
		}
		echo "Klik <a href='index.php'>di sini</a> untuk kembali ke halaman data pegawai";
	} else {
		die ("Access Denied");	
	}
	?>
</div>