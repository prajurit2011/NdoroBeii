<html>
	<head><title>Belajar proses checkbox dan php</title/head>
	<body>
		<form method="post">
			Pilihan pendidikan umum / Dikum<br />
			
			<input type="checkbox" name="sd" value="sd" />SD<br />
			<input type="checkbox" name="smp" value="smp" />Smp<br />
			<input type="checkbox" name="sma" value="sma"/>Sma<br />
			<input type="checkbox" name="s1" value="s1"/>S1br <br />
			<input type="checkbox" name="akademitni"value="akademitni" />akademitni<br />
			<input type="checkbox" name="lemhanas" value="lemhanas"/>lemhanas<br />
			
			<input type="submit"  name="kirim" value="cetak" ><br />
			<input type="reset"  name="reset" value="clear" >
			
		</form>
		<?php
		if(isset($_POST['kirim'])){
			//check apakah ada di centang ;
			if(isset($_POST['sd'])){
				echo $_POST['sd']. "<br/>";
			}if(isset($_POST['smp'])){
				echo $_POST['smp']. "<br/>";
			}if(isset($_POST['sma'])){
				echo $_POST['sma']. "<br/>";
			}if(isset($_POST['s1'])){
				echo $_POST['s1']. "<br/>";
			}if(isset($_POST['akademitni'])){
				echo $_POST['akademitni']. "<br/>";
			}if(isset($_POST['lemhanas'])){
				echo $_POST['lemhanas']. "<br/>";
			}	
		}
		?>
			
			
			
		