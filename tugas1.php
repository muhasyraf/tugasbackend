<?php

$namadepan = "Muhammad "; $namatengah1 = "Asyraf "; $namatengah2 = "Faiz "; $namabelakang = "Kamil";
$namalengkap = $namadepan.$namatengah1.$namatengah2.$namabelakang;

$tempat = "Bekasi, "; $tanggal = 3; $bulan = " September "; $tahun = 2002;
$ttl = $tempat.$tanggal.$bulan.$tahun;

$jln = "Jl. Dukuh Zamrud, "; $kel = "Kel. Cimuning, "; $kec = "Kec. Mustika Jaya, "; $kota = "Bekasi, "; $pos = "17165";
$alamat = $jln.$kel.$kec.$kota.$pos;

$menikah = true;

if ($tahun % 4 == 0) {
        $tahunBool = true;
}
else {
        $tahunBool = false;
}


echo '<pre>';

echo "<b>Biodata</b>"."<br>";
echo "Nama\t\t\t\t\t: ".$namalengkap."<br>";
echo "No. Telp\t\t\t\t: 081224924698"."<br>";
echo "Usia\t\t\t\t\t: 19 Tahun"."<br>";
echo "Tempat, tanggal lahir\t\t\t: ".$ttl."-"; echo var_export($tahunBool)."<br>";
echo "Status\t\t\t\t\t: "; echo var_export($menikah)."<br>";
echo "Alamat\t\t\t\t\t: ".$alamat."<br>";
echo "Target IPK\t\t\t\t: 3.75"."<br>";

echo '</pre>';
