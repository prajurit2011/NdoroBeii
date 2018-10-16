<html>
<head>
	<title>Latihan Form 3</title>
</head>
<body>
	<form method="post">
	<table>
            <tr>
                <td>Nama</td><td>:</td><td><input name="nama" /></td>
            </tr>
            <tr>
                <td>Pangkat</td><td>:</td>
                <td>
                    <select name="pangkat">
                        <option value="Jendral">Jendral</option>
                        <option value="Letkol">Letkol</option>
                        <option value="Mayor">Mayor</option>
                        <option value="Kapten">Kapten</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>NRP</td><td>:</td><td><input name="nrp" /></td>
            </tr>
            <tr>
                <td>Jabatan</td><td>:</td><td><input name="jabatan" /></td>
            </tr>
            <tr>
                <td>Phone</td><td>:</td><td><input name="phone" /></td>
            </tr>
            <tr><td>Jenis Kelamin</td><td>:</td>
                <td>
                    <input type="radio" name="jk" value="laki-laki" >laki-laki</radio><br />
                    <input type="radio" name="jk" value="perempuan" >perempuan</radio>
                </td>
            </tr>
			<tr>
				<td>Pendidikan</td><td>:</td>
				<td>
					<input type="checkbox" name="sd" value="sd" />SD<br />
					<input type="checkbox" name="smp" value="smp" />Smp<br />
					<input type="checkbox" name="sma" value="sma"/>Sma<br />
					<input type="checkbox" name="s1" value="s1"/>S1 <br />
					<input type="checkbox" name="akademitni"value="akademitni" />akademitni<br />
					<input type="checkbox" name="lemhanas" value="lemhanas"/>lemhanas<br />
				</td>
			</tr>
            <tr>
                <td>Alamat</td><td>:</td><td>
				<textarea name="alamat"></textarea>
				</td>
            </tr>
            <tr>
                <td></td><td></td>
                <td>
                    <input type="submit" name="kirim" value="Kirim" />
                    <input type="reset" name="reset" value="Clear" />
                </td>
            </tr>
        </table>
	<form>
	<?php
	 if (isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $pangkat = $_POST['pangkat'];
        $nrp = $_POST['nrp'];
        $jabatan = $_POST['jabatan'];
        $phone = $_POST['phone'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
       
        echo "<table border=1>";
        echo "<tr><td>Nama </td><td>:</td><td>" . $nama . "</td></tr>";
        echo "<tr><td>Pangkat </td><td>:</td><td>" . $pangkat . "</td></tr>";
        echo "<tr><td>Nrp </td><td>:</td><td>" . $nrp . "</td></tr>";
        echo "<tr><td>Jabatan </td><td>:</td><td>" . $jabatan . "</td></tr>";
        echo "<tr><td>Phone </td><td>:</td><td>" . $phone . "</td></tr>";
        echo "<tr><td>Jenis Kelamin </td><td>:</td><td>" . $jk . "</td></tr>";
	if(isset($_POST['kirim'])){
		echo "<tr><td>Pendidikan</td><td>:</td><td>";
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
		echo "</td></tr>";
		echo "<tr><td>Alamat </td><td>:</td><td>" . $alamat . "</td></tr>";
	 }
	?>
</body>
</html>