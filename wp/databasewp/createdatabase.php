<?php
$servername = "localhost";
$username = "root";
$password = " "; 

//create connection
$sambung = new mysqli($servername, $username); //jika didalam xampp ada password maka masukkan password($servername, $username,$password)

//check connection
if ($sambung->connect_error){
die ("Koneksi Gagal: " .  $sambung->connect_error);
}

//create database
$nama_db = "create database wp";
if ($sambung->query($nama_db) === true) {
echo " database berhasil dibuat";
} else {
echo " database gagal dibuat";
}

$sambung->close();
?>