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
    background-color:  lightblue;
   background-image: url("3.png");
    background-repeat: no-repeat;
    background-position: bottom;
}
h1 {
    color: red;opacity:0.5;
    text-align: center;
}
p {
    font-family: arial;
    font-size: 20px;
}
</style>
</head>
<body>


<div class="container">

	<br><br>
	<br><br>
	<br><br>

	<a href="data/add" class="btn btn-primary">Tambah Data Karyawan</a>
	<a href="users/add_user" class="btn btn-primary">Add User</a>
	<a href="users/daftar_user" class="btn btn-primary">daftar user</a>

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Karyawan</th>
				<th>Alamat</th>
				<th>Email</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_karyawan as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[name]</td>
					<td>$row[alamat]</td>
					<td>$row[email]</td>
					<td>
						<a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
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
<style>
body {
 background-image: url("2.gif");
 background-position: top;
}
</style>
	
</body>
</html>
