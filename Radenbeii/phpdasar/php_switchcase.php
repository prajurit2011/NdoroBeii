<html>
	<head>
		<title>Belajar Switch Case</title>
	</head>
	<body>
		<form method="POST">
			<table>
				<tr>
					<td>Pilih Pangkat</td><td>:</td>
					<td>
						<select name="pangkat">
							<option value="">Pilih Pangkat</option>
							<option value="jendral">jendral</option>
							<option value="kolonel">kolonel</option>
							<option value="letkol">letkol</option>
							<option value="mayor">mayor</option>
							<option value="kapten">kapten</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan=3>
						<input type="submit" name="kirim" value="cetak" />
					</td>
				</tr>
			</table>
		</form>
		<?php
		// switch biasanya digunakan u/ membandingkan nilai nilai
		//yang sudah kita ketahui
		if(isset($_POST['kirim'])){
			
			switch($_POST['pangkat']){
				case "jendral":
				// statement yang mau dijalankan
				echo "Pangkat = " . $_POST['pangkat'];
				break;
				
				case "letkol" :
				echo "Pangkat = " . $_POST['pangkat'];
				break;
				
				case "mayor" :
				echo "Pangkat = " . $_POST['pangkat'];
				break;
				
				case "kapten" :
				echo "Pangkat = " . $_POST['pangkat'];
				break;
				
				default :
				echo "anda belum memilih pangkat ";
			}
		}
		?>
	</body>
</html>