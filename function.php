<?php 
$conn = mysqli_connect("localhost","root","","absen");
$id=$_GET["id"];
var_dump($id);
function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah(){
	global $conn;
	$nama = $_POST["nama"];
	$query = "INSERT INTO absensi_kelas VALUES ('','$nama',1+1,'','','') WHERE nama = 'Deva'";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function tambahdata(){
	global $conn,$id;

	$query = "UPDATE absensi_kelas SET sakit = '2' WHERE id = '$id'";
	return mysqli_affected_rows($conn);
	
}

function hapus($id){
	global $conn;
	
	mysqli_query($conn,"DELETE FROM absensi_kelas WHERE id = $id");
	
	return mysqli_affected_rows($conn);
}

function sakit(){
	global $conn;
	mysqli_query('SELECT sakit FROM absensi_kelas');
	$sakit += 1;
}
?>