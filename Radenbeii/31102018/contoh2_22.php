<html>
<head>
	<title>.:: tes koneksi dengan server database ::.</title>
</head>
<body>
<font face=verdana size=2>
<h3>Tes koneksi dg mysql database server...</h3><p>
<form action="contoh2_22.php" method="POST">

	<input type=radio name=tombol Value=1>Sambung
	<input type=radio name=tombol Value=0>Putus
	<br><br>
	<input type=submit Value=" OK ">
</form>
<?
require("koneksi.php");
$hub=open_connection();
$databasename="alamat";
$tombol = '';
if (isset($tombol))
{  $tombol = $_POST['tombol'];
	if ($tombol==1)
	{
		if ($hub) 
		{
			echo ("Koneksi dg Server Database <b><u>SUKSES</b></u><br>");
			$db=@mysql_select_db($databasename,$hub);
			if ($db) echo "Database <b><u>$databasename</b></u> ditemukan";
			else echo "Database <b><u>$databasename</b></u> TIDAK ditemukan";
		} else
			echo ("Koneksi dg Server Database <b><u>GAGAL</b></u><br>");
	}
	elseif ($tombol==0) 
	{
		$mati=@mysql_close($hub);
		echo ("Koneksi Server Database <b><u>Dimatikan</b></u><br>");
	}
}
?>
</body>
</html>
