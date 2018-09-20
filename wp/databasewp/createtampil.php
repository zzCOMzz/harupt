<?php
require 'createconection.php';
$conn    = Connect();
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT No, Hari, Tanggal, UPT, Tragi, GI, Manager, ASMAN, Nama_Pekerjaan, Lokasi, Petugas, Pengawas_Pekerjaan, Pengawas_K3
		FROM DaftarPengunjung';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

echo '<table>
		<thead>
			<tr>
<table border=1>
				<th>No</th>
				<th>Hari</th>
				<th>Tanggal</th>
				<th>UPT</th>
				<th>Tragi</th>
				<th>GI</th>
				<th>Manager</th>
				<th>ASMAN</th>
				<th>Nama_Pekerjaan</th>
				<th>Lokasi</th>
				<th>Petugas</th>
				<th>Pengawas_Pekerjaan</th>
				<th>Pengawas_K3</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['No'].'</td>
			<td>'.$row['Hari'].'</td>
			<td>'.$row['Tanggal'].'</td>
			<td>'.$row['UPT'].'</td>
			<td>'.$row['Tragi'].'</td>
			<td>'.$row['GI'].'</td>
			<td>'.$row['Manager'].'</td>
			<td>'.$row['ASMAN'].'</td>
			<td>'.$row['Nama_Pekerjaan'].'</td>
			<td>'.$row['Lokasi'].'</td>
			<td>'.$row['Petugas'].'</td>
			<td>'.$row['Pengawas_Pekerjaan'].'</td>
			<td>'.$row['Pengawas_K3'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';
