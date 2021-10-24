<?php

function perhitunganSederhana(int $x, int $y) {
    $z = $x * $y;

    if ($z % 3 ==0) {
        echo "habis dibagi tiga";
    } 
    else {
        echo "Tidak habis dibagi tiga";
    }
}

$angkatan = 2021;
$semester = 1;

perhitunganSederhana($angkatan, $semester);