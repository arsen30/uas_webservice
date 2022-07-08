<?php
$conn = mysqli_connect('localhost', 'root', '', 'uts_webservice'); //mengkoneksi ke mysql
$query = mysqli_query($conn, 'SELECT * FROM mytable'); //query memilih semua data di tabel mytable
while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
echo json_encode($data);
?>