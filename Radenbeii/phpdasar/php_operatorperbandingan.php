<html>
	<head><title>Operator Perbandingan</title></head>
	<body>
		<h3>Belajar Operator Perbandingan</h3>
		<?php
		/*
		$nilai1	= 10;
		$nilai2	= 20;
		
		if($nilai1 > $nilai2){
			echo "<h6>" . $nilai1 . "lebih besar dari" . $nilai2 . "<h6>";
		}else{
			echo "<h6>" . $nilai1 . "lebih kecil dari" . $nilai2 . "<h6>";
		}
		*/
		?>
		<form method="POST">
		<table>
			<tr>
				<td>Nilai1</td><td>:</td>
				<td><input name="nilai1" type="text" /></td>
			</tr>
			<tr>
				<td>Nilai2</td><td>:</td>
				<td><input name="nilai2" type="text" /></td>
			</tr>
			<tr>
				<td colspan=3>
					<input type="submit" name="kirim" value="cetak" />
				</td>
			</tr>
		</table>
		</form>
		<?php
			if(isset($_POST['kirim'])){
				$nilai1= $_POST['nilai1'];
				$nilai2= $_POST['nilai2'];
				
				// CHECK DG OPERATOR PERBANDINGAN SAMA DENGAN(==)
				if($nilai1==$nilai2){
					echo "input pertama sama dengan input kedua";
				}
				
				// CHECK DG OPERATOR PERBANDINGAN (>) LEBIH BESAR
				else if($nilai1 > $nilai2){
					echo "input pertama lebih besar dari input kedua";
				}
				
				// CHECK DG OPERATOR PERBANDINGAN (<) LEBIH KECIL
				else if($nilai1 < $nilai2){
					echo "input pertama lebih kecil dari input kedua";
				}
				
				// CHECK DG OPERATOR PERBANDINGAN (>=) LEBIH BESAR SAMA DENGAN
				else if($nilai1 >= $nilai2){
					echo "input pertama lebih besar sama dengan input kedua";
				}
				
				// CHECK DG OPERATOR PERBANDINGAN (<=) LEBIH KECIL SAMA DENGAN
				else if($nilai1 <= $nilai2){
					echo "input pertama lebih besar sama dengan input kedua";
				}
			}
		?>
	</body>
</html>