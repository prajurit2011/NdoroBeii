<html>
	<head>
		<title>Latihan php</title>
	</head>
<body>
	<form method="post">
	<table border=1>
		<tr>
			<td>Nama</td><td>:</td><td><input name="nama"/></td>
		</tr>
		<tr>
			<td>Pangkat</td><td>:</td>
			<td>
				<select name="pangkat">
						<option value="Jendral">Jendral</option>
						<option value="Letkol">letkol</option>
						<option value="Mayor">Mayor</option>
						<option value="Kapten">Kapten</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nrp</td><td>:</td><td><input name="nrp"/></td>
		</tr>
		<tr>
			<td>Jabatan</td><td>:</td><td><input name="jabatan"/></td>
		</tr>
		<tr>
			<td>Phone</td><td>:</td><td><input name="phone"/></td>
		</tr>
		<tr><td>Jenis Kelamin</td><td>:</td>
			<td>
				<input type="radio" name="jenkel" value="laki-laki">laki-laki</radio><br />
				<input type="radio" name="jenkel" value="perempuan">perempuan</radio>
			</td>
		</tr>
		<tr>
			<td>Alamat</td><td>:</td><td><input name="alamat"/></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="kirim" value="kirim"/>
				<input type="reset" name="reset" value="clear"/>
			</td>
		</tr>
	</table>
	</form>
	<?php
		if (isset($_POST['kirim'])){
		$nama = $_POST['nama'];
		$pangkat = $_POST['pangkat'];
		$nrp = $_POST['nrp'];
		$jabatan = $_POST['jabatan'];
		$phone = $_POST['phone'];
		$jenkel = $_POST['jenkel'];
		$alamat = $_POST['alamat'];
		echo "<table border=1>";
		echo "<tr><td>Nama 			</td><td>=</td> <td>". $nama ."</td><br /></tr>";
		echo "<tr><td>Pangkat 		</td><td>=</td> <td> ". $pangkat ."</td><br /></tr>";
		echo "<tr><td>Nrp			</td><td>=</td> <td> ".$nrp ."</td><br /></tr>";
		echo "<tr><td>Jabatan 		</td><td>=</td> <td> ". $jabatan ."</td><br /></tr>";
		echo "<tr><td>Phone</td><td>=</td> <td> ". $phone ."</td><br /></tr>";
		echo "<tr><td>Jenis Kelamin </td><td>=</td> <td> ". $jenkel ."</td><br /></tr>";
		echo "<tr><td>Alamat	 	</td><td>=</td> <td> ". $alamat ."</td><br /></tr>";
		echo "</table>";
	}
	?>
</body>
</html>