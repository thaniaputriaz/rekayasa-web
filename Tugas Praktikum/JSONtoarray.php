<?php
$jsonData = '{"nama":"Irene","asal":"Daegu","Posisi":"Leader"}';

$obj = json_decode($jsonData);
echo $obj->nama;
echo "<br>";
echo $obj->asal;

$arr = json_decode($jsonData, true);
echo "<br>";
echo $arr["nama"];
echo "<br>";
echo $arr["umur"];
?>
