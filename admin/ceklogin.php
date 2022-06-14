<?php
require_once("../config/koneksi_db.php");
require_once("../config/config.php");
//cek apakah data dikirim sesuai variabel berikut
if(isset($_POST['btnlogin'])){
	$txt_user = $_POST['username']; //sesuai name di form
	$txt_pass = md5($_POST['password']); //sesuai name di form
	//query untuk validasi ke database apakah username dan password ditemukan&sesuai
	//$koneksi, variabel diambil dari file koneksi_db.php
	$result = mysqli_query($koneksi, "SELECT * FROM mst_userlogin where username= '".$txt_user."' AND password = '".$txt_pass."' AND isactive=1");
	//mysqli_num_rows($result) , fungsi untuk menghitung hasil output dari query berupa angka		
	if(mysqli_num_rows($result) > 0){
		//jika hasil query data lebih dari 0
		//header("Location:") , untuk direct atau pindah ke page lain secara otomatis
		//URL, define constanta di ambil dari file config.php
		session_start();
		$_SESSION['userlogin']=$txt_user;
		header("Location: ".URL."home.php");	
	}else{
		header("Location: ".URL."");
	}
}
?>