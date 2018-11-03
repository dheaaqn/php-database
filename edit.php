<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">
		<center><h1>Silahkan Edit Data Anda</h1></center>
	</div>
	<br/>

	<section id="input-form">
		<form action="edit-aksi.php" method="post">
			<div class="form">
				<label>ID</label>
				<input type="text" name="id">
			</div>
			<div class="form">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="form">
				<label>Level</label>
				<input type="text" name="level">
			</div>
			<div class="form">
				<label>Full Name</label>
				<input type="text" name="fullname">
			</div>
			<div class="lihat">
				<a href="index.php">Lihat Semua Data</a>
			</div>
			<div class="form">
				<input type="submit" name="submit" value="SUBMIT" class="bg-blue">
			</div>
		</form>
	</section>
</body>
</html>