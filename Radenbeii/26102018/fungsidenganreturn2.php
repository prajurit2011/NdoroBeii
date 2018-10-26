<?php
	$font_size = '15px';
	$background_color = '#4e79a0';
	
	if ($_POST) {
		$background_color = $_POST['background_color'];
		$font_size = $_POST['font_size'];
		}  else {
		if (isset($_COOKIE['background-color'])) 
			 $_POST['background_color'] = $background_color = $_COOKIE['background-color'];
		}
		if (isset($_COOKIE['font-size'])) {
			 $_POST['font_size'] = $font_size = $_COOKIE['font-size'];
		}
	
	
	// Delete Cookies
	$msg = false;
	if (isset($_POST['hapus_cookie']))
	{
		setcookie('background-color', '', 0, '/');
		setcookie('font-size', '', 0, '/');
		$msg = 'Data cookie berhasil dihapus';
	}

	// Set Cookie 7  hari
	if (isset($_POST['remember']))
	{
		setcookie('background-color', $_POST['background_color'], strtotime('+7 days'), '/');
		setcookie('font-size', $_POST['font_size'], strtotime('+7 days'), '/');
		$msg = 'Data cookie berhasil disimpan';
	}
?>
<html>
<head>
	<title>Demo Cookie Pada PHP </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style type="text/css">
	body {
		font: <?=$font_size?> "open sans", "segoe ui", tahoma;
		background-color: <?=$background_color?>;
		background-image: url('https://www.windowscentral.com/sites/wpcentral.com/files/styles/xlarge/public/field/image/2018/08/devil-may-cry-5-livestream.jpg?itok=hj6mKaOl.jpg');
	}
	h3 {
		margin-top: 0;
		margin-bottom: 10px;
	}
	div {
		margin-bottom: 5px;
	}
	select {
		padding: 5px 10px;
		font-size: <?=$font_size?>;
		border: 1px solid #CCCCCC;
		color: #5d5d5d;
		text-align: right;
		width: 200px;
		margin-bottom: 10px;
	}
	form {
		margin: 0;
				
				
	}
	.container {
		width: 250px;
		margin: auto;
		margin-top: 15px;
		border: 0;
		padding: 20px 20px 15px;
		background-color: #FFFFFF;
	}
	.copyright {
		padding: 0;
		background: none;
		text-align: center;
		margin-top: 10px;
		color: #FFFFFF;
		font-size: smaller;
	}
	.button {
		border: 0;
		padding: 7px 20px;
		float: left;
		font-family: "open sans";
		color: #FFFFFF;
		font-size: <?=$font_size?>;
		margin-right: 5px;
		margin-bottom: 5px;
		cursor: pointer;
	}
	.blue {
		background-color: #3e97e2;
	}
	.copyright a {
		text-decoration: none;
		color: #e4e4e4;
		margin-top: 3px;
		display: inline-block;
	}
	.red {
		background-color: #e26b3e;
	}
	.clearfix::before,
	.clearfix::after
	{
		content: "";
		float: none;
		clear: both;
		display: block;
	}
	.remember {
		margin-bottom: 12px;
	}
	.success {
		background-color: #abffc1;
		padding: 5px 10px;
		color: #696969;
	}
	</style>
	
</head>
<body>

<div class="container">
	<form method="post" action="">
		<h3>Fungsi dengan Return</h3>
		
		
		<?php
function nama_bulan($bulan) {
$nama_bulan = array (1 => 'Januari', 
                         2 => 'Februari', 
                         3 => 'Maret',
                         4 => 'April',
                         5 => 'Mei',
                         6 => 'Juni',
                         7 => 'Juli',
                         8 => 'Agustus',
                         9 => 'September',
                         10 => 'Oktober',
                         11 => 'November',
                         12 => 'Desember');
return $nama_bulan[$bulan];
}

$bulan = nama_bulan(date('n')); 
echo $bulan . ' ' . date('Y'); 
?>

		
	</form>
</div>

</body>
</html>
