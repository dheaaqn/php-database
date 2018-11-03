<!DOCTYPE html>
<html>
<head>
	<title>Tabel Siswa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="tabel">
		<h1><center>Data Siswa</center></h1>
		<table class="table" align="center">
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Full Name</th>
				<th>Aksi</th>
			</tr>
	</div>
	<?php
	  include('koneksi.php');
	  $sql_tabel ="SELECT * FROM users";
	  $data=mysqli_query($conn,$sql_tabel);
	  while($baris_data=mysqli_fetch_array($data,MYSQLI_ASSOC)){
	?>
  	<tr>
	    <td><?php echo $baris_data['id']; ?></td>
	    <td><?php echo $baris_data['username']; ?></td>
	    <td><?php echo $baris_data['password']; ?></td>
	    <td><?php echo $baris_data['level']; ?></td>
	    <td><?php echo $baris_data['fullname']; ?></td>
	    <td>
			<a class="edit" href="edit.php?id=<?php echo $baris_data['Id']; ?>">Edit</a> or
			<a class="hapus" href="delete.php?id=<?php echo $baris_data['Id']; ?>">Hapus</a>
		</td>
  	</tr>
<?php } ?>
	</table>
</body>
</html>

