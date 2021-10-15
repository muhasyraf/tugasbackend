<?php

$nilai = [72, 52, 99, 97, 67, 62, 85, 98, 51, 54, 77, 79, 64, 73, 86];
  
if (rata2($nilai) >= 80) {
    echo "Predikat nilai: A (Lulus)";
}
elseif (rata2($nilai) >= 70) {
    echo "Predikat nilai: B (Lulus)";
}
elseif (rata2($nilai) >= 60) {
    echo "Predikat nilai: C (Lulus)";
}
elseif (rata2($nilai) >= 50) {
    echo "Predikat nilai: D (Lulus)";
}
else {
    echo "Tidak Lulus";
}

echo "<br>";

$nilaiKonversi = rata2($nilai) / 25;
echo "Nilai rata-rata sebelum dikonversi: ".rata2($nilai)."<br>";
echo "Nilai setelah dikonversi: ".$nilaiKonversi;

function rata2(array $total) {

    for ($i=1; $i <= count($total)-1; $i++) { 
           
        $total[0] = $total[0] + $total[$i];
    
    }   return $total[0] / count($total);

}

// 100=4, 75=3, 50=2, 25=1
