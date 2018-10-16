<html>
	<head><title>Belajar proses radio botton dan PHP</title></head>
	<body>
		<form method="post">
			<table>
				<tr><td>status</td><td>:</td>
				<td>
				<input type="radio" name="pilihan" value="menikah">Menikah</radio><br />
				<input type="radio" name="pilihan" value="jomblo">Jomblo</radio>
				</td>
				</tr>
				<tr>
					<td></td><td></td>
					<td><input type="submit" name= "submit" value="cetak" /></td>
				</tr>
			</table>
		</form>
		<?php
			// cek jika tombol submit ditekan, maka proses
			if (isset($_POST['submit'])){
				$pilih = $_POST['pilihan'];
			echo "status anda adalah :".$pilih;
		}
	?>	
	</body>
	</html>