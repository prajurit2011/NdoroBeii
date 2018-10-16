<html>
<head></head>
<body>

	<form method="post">
		<table>
			<tr>
				<td>Nama</td><td>:</td><td><input name="nama"/></td>
			</tr>
			<tr>
				<td>Phone</td><td>:</td><td><input name="phone"/></td>
			</tr>
			<tr>
				<td>Gaji</td><td>:</td><td><input name="gaji"/></td>
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
				<td></td><td></td>
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
		$phone = $_POST['phone'];
		$gaji = $_POST['gaji'];
		$pangkat = $_POST['pangkat'];
		echo "Nama = ". $nama ."<br />";
		echo "No phone = ". $phone ."<br />";
		echo "Pangkat = ".$pangkat ."<br />";
		echo "Gaji = ". $gaji ."<br />";
	}
	if ($pangkat=="Jendral"){
	$bonus = $gaji *0.8;
	echo " bonus = " . $bonus;
	}elseif ($pangkat=="Letkol"){
	$bonus = $gaji *0.6;
	echo " bonus = " . $bonus;
	}elseif ($pangkat=="Mayor"){
	$bonus = $gaji *0.4;
	echo " bonus = " . $bonus;
	}else{
	$bonus = $gaji *0.2;
	echo "bonus = ".$bonus;
	 
	}
	?>
</body>
</html>

