<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/pertemuan2/getWisata.php");

#mengubah JSON menjad array
$data = json_decode($send, TRUE);

echo "<table border='1' cellpadding='8' cellspacing='0'";
echo "<tr>
        <th align='left' width='150'>KOTA</th>
        <th align='left' width='150'>LANDMARK</th>
        <th align='left' width='150'>TARIF</th>
      </tr>";

foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}

echo "</table>";

?>