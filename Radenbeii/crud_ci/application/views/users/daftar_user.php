<!doctype html>
<html lang="en">

<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan Ndamel CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
	body {
    background-color: lightblue;
}
h1 {
    color: white;
    text-align: center;
}
p {
    font-family: verdana;
    font-size: 20px;
}
</style>
</head>
<body>


<div class="container">
	<h1>Latihan Ndamel CRUD</h1>
	<br><br>



	<a href="data/index" class="btn btn-primary">mbalik ten data karyawan</a>

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>username</th>
				<th>password</th>
							<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($xx as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[username]</td>
					<td>$row[password]</td>
				
					<td>
						<a href='daftar_user/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
<h1>www.ndorobeii.com</h1>
	
</body>
</html>
