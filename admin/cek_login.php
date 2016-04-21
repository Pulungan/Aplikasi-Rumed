<?php
session_start();
include '../config/koneksi.php';

$adminame = $_POST['username'];
$pass    = $_POST['password'];

$sql = "SELECT * FROM admin WHERE adminame = '$adminame' and adminpass = '$pass' ";
$hasil = $koneksi->query($sql);
$row = $hasil->num_rows;
$data = $hasil->fetch_assoc();

//print_r($data)
if($row > 0)
{	
	$_SESSION['kunci'] = md5(time());
	$_SESSION['adminame'] = $data['adminame'];
	$_SESSION['nama'] = $data['nama'];
	header('location:dashboard.php');
}
else {	
	header('location:index.php');	
}
	
?>