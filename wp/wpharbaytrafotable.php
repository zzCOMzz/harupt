<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE WPHARBAYTRAFO (
No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Hari VARCHAR(30) NOT NULL,
Tanggal DATE NOT NULL,
UPT VARCHAR(30) NOT NULL,
Tragi VARCHAR(30) NOT NULL,
GI VARCHAR(30) NOT NULL,
manager VARCHAR(30) NOT NULL,
ASMAN VARCHAR(30) NOT NULL,
Nama_Pekerjaan VARCHAR(30) NOT NULL,
Lokasi VARCHAR(30) NOT NULL,
Petugas VARCHAR(150),
Pengawas_Pekerjaan VARCHAR(150),
Pengawas_K3 VARCHAR(150)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table WPHARBAYBATERE created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>