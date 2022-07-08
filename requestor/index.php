<?php
$json_data=file_get_contents("http://localhost/uas_webservice1/provider"); //request data
$obj = json_decode($json_data); //proses decode json
echo "<pre>";
print_r($obj);
echo "</pre>";
/*
foreach($obj as $arr) {
	echo $arr->id;
	echo "<br>";
	echo $arr->kategori;
	echo "<br>";
	echo $arr->nama;
	echo "<br>";
	echo $arr->deskripsi;
	echo "<br>";
	echo $arr->OS;
	echo "<br>";
	echo $arr->harga;
	echo "<br>";
	echo $arr->stok;
	echo "<br>";
	echo $arr->produk0ukuran;
	echo "<br>";
	echo $arr->produk0warna;
	echo "<br>";
	echo $arr->fitur;
	echo "<br>";
}*/
?>