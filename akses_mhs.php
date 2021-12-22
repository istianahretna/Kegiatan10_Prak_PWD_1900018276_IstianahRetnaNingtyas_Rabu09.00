<?php
$url = "http://localhost/pwd/Praktikum/Pertemuan10/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response); 
foreach ($result as $r) {
echo "<p>";
echo "NIM : " . $r->Nim . "<br />";
echo "Nama : " . $r->Nama . "<br />"; 
echo "jenis kel : " . $r->Jenis_Kelamin . "<br />"; 
echo "Alamat : " . $r->Alamat . "<br />"; 
echo "Tgl Lahir : " . $r->Tgl_Lahir . "<br />"; 
echo "</p>";
}
