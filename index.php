<?php 
require "function.php";
$id=$_GET["id"];
var_dump($id);
$student = query("SELECT * FROM absensi_kelas");
if(isset($_POST["submit"])){
	if(tambahdata($_POST) > 0){
		echo "
		<script>
		alert('data berhasil ditambahkan');
		</script>
		";
	}
}


if(isset($_POST["submit2"])){
	if(tambahdata($_POST) > 0){
		echo "
		<script>
		alert('data berhasil ditambahkan');
		</script>
		";
	}else{
		echo "
		<script>
		alert('data gagal ditambahkan');
		</script>
		";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Aplikasi Pembuatan Soal</title>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dist/css/admin.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet">
</head>
<body>


	<div class="wrapper">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>
		</nav>

		<aside class="sidebar sidebar-collapse">
			<div class="menu-content">
				<ul>
					<li><a href="index.php"><i class="fas fa-home"></i> <span>Home</span></a></li>
					<li>
						<a href="#"><i class="fas fa-pen"></i> <span>Data Absensi</span><i class="fas fa-angle-down pull-right"></i></a>
					</ul>
				</div>
			</aside>

			<section class="content">
				<h1>Aplikasi Absensi Kelas</h1>
				<br><br>
				<p><a href="tambah.php"><i class="far fa-plus-square"> tambah data siswa</i></a></p>
				<div class="tabel">
					<form action="" method="post">
						<form method="get">
							<table class="table table-bordered">
								<tr class="thead">
									<th>Nama</th>
									<th>aksi</th>
								</tr>
								
								<tr>
									<td>DEVA ?></td>
								</tr>

							</table>
						</form>
						<center><a href="function.php?id=<?php echo $siswa["id"]; ?>"><input type="submit" name="submit1" class="btn btn-success"></a></center>

					</form>
				</div>
			</section>
		</div>


		<script src="dist/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="dist/js/admin.js"></script>
		<script type="text/javascript">
		</script>
	</body>
	</html>