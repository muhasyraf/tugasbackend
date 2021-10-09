<?php

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

foreach($hari as $value){
    echo $value;
}

echo "<br>";

foreach ($bulan as $value) {
    echo $value;
}

echo "<br>";

$jumlah = count($bulan);
echo $jumlah;

echo "<br>";

$hasil = $jumlah*19;

if ($hasil % 2 == 0) {
    echo $hasil." merupakan angka genap";
}

else {
    echo $hasil." merupakan angka ganjil";
}