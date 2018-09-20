<html>
<head>
<meta charset="utf-8">
        <title> REVIEW </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="logopln.ico"></head>
		<link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
<body>
<form method = post >
<div id="wrapper">
				<ul id="mainNav">
					<li class="header">Working Permit</li>
				</ul>
<?php
require 'createconnection.php';
$conn    = Connect();
$Hari  = $conn->real_escape_string($_POST['Hari']);
$Tanggal = $conn->real_escape_string($_POST['Tanggal']);
$UPT = $conn->real_escape_string($_POST['UPT']);
$Tragi = $conn->real_escape_string($_POST['Tragi']);
$GI = $conn->real_escape_string($_POST['GI']);
$manager = $conn->real_escape_string($_POST['manager']);
$ASMAN = $conn->real_escape_string($_POST['ASMAN']);
$Nama_Pekerjaan = $conn->real_escape_string($_POST['Nama_Pekerjaan']);
$Lokasi = $conn->real_escape_string($_POST['Lokasi']);
$Petugas = $conn->real_escape_string($_POST['Petugas']);
$Pengawas_Pekerjaan = $conn->real_escape_string($_POST['Pengawas_Pekerjaan']);
$Pengawas_K3 = $conn->real_escape_string($_POST['Pengawas_K3']);
$query   = "INSERT into WPHARBAYBATERE  (No,Hari ,Tanggal, UPT, Tragi, GI, manager, ASMAN, Nama_Pekerjaan, Lokasi, Petugas, Pengawas_Pekerjaan, Pengawas_K3) VALUES('" . $Hari . "','" . $Hari . "','" . $Tanggal . "','" . $UPT . "','" . $Tragi . "','" . $GI . "','" . $manager . "','" . $ASMAN . "','" . $Nama_Pekerjaan . "','" . $Lokasi . "','" . $Petugas . "','" . $Pengawas_Pekerjaan . "','" . $Pengawas_K3 . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
?>
 
 <div id="containerHolder">
					<div id="container">
						<h2><a href="#">Thank You For Contacting Us</h2>
								<div id="main">
<h3>
<?php
echo "Hari: ".$Hari ."<br><br>"; 
echo "Tanggal    : ".$Tanggal."<br><br>";
echo "UPT    : ".$UPT."<br><br>";
echo "Tragi    : ".$Tragi."<br><br>";
echo "GI    : ".$GI."<br><br>";
echo "Manager    : ".$manager."<br><br>";
echo "ASMAN    : ".$ASMAN."<br><br>";
echo "Nama_Pekerjaan    : ".$Nama_Pekerjaan."<br><br>";
echo "Lokasi    : ".$Lokasi."<br><br>";
echo "Petugas    : ".$Petugas."<br><br>";
echo "Pengawas_Pekerjaan    : ".$Pengawas_Pekerjaan."<br><br>";
echo "Pengawas_K3    : ".$Pengawas_K3."<br><br>";
$conn->close();
?>
<input type = "submit" name = "submit" value = Ok></form>
<div id="hasil">
<center>
									<?php
									?>
								</div>
								</div>
							<div class="clear"></div>
<center>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<p id="footer">Copyright &copy 2018 HAR UPT PLN Palembang.<br> All Rights Reserved</p></center>
</body>
</html>