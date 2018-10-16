<html>
	<head>
		<title>Text Area PHP</title>
	</head>
<body>
	<form method="post">
		Alamat:<br />
		<textarea name="alamat"></textarea><br />
		
		<input type="submit" name="kirim" value="Cetak" />
	</form>
	<?php
		if(isset($_POST['kirim'])){
			$alamat = $_POST['alamat'];
			echo "Alamat : ". $alamat;
		}
	?>
</body>
</html>