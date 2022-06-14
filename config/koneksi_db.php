<?php
$servername = "localhost";//127.0.0.1
$database = "db_latihan";
$user_db = "root";
$pass_db = "";

$koneksi = mysqli_connect($servername, $user_db, $pass_db, $database);
if(!$koneksi){
	echo "<h3>koneksi gagal!! </h3>";
	exit;
}
//set database
mysqli_select_db($koneksi, $database);

?>