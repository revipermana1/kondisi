<?php
// No 1
// $tujuan = readline('Tujuan: ');
// $jp = readline('Jumlah Penumpang: ');
// $tiket = 0;
// $jakarta = 200000;
// $banten = 250000;
// $yogyakarta = 300000;
// if ($tujuan == 'Jakarta') {
//     $tiket = $jakarta;
// }elseif ($tujuan == 'Banten') {
//     $tiket = $banten;
// }elseif ($tujuan == 'Yogyakarta') {
//     $tiket = $yogyakarta;
// }
// $total = $tiket * $jp;
// echo "Harga tiket / orang " . $tiket;
// echo PHP_EOL;
// echo "Total harga tiket " . $total;


// No 2 
// $tujuan = readline('Tujuan: ');
// $jpd = readline('Jumlah Penumpang Dewasa: ');
// $jpa = readline('Jumlah Penumpang Anak:');
// $tiketd = 0;
// $tiketa = 0;
// $jktd = 200000;
// $bntd = 250000;
// $ygyd = 300000;
// $jkta = 100000;
// $bnta = 125000;
// $ygya = 150000;
// if ($tujuan == 'Jakarta') {
//     $tiketd = $jktd;
//     $tiketa = $jkta;
// }elseif ($tujuan == 'Banten') {
//     $tiketd = $bntd;
//     $tiketa = $bnta;
// }elseif ($tujuan == 'Yogyakarta') {
//     $tiketd = $ygyd;
//     $tiketa = $ygya;
// }


// $total = $tiketd * $jpd + $tiketa * $jpa;
// echo "Harga tiket dewasa / orang " . $tiketd;
// echo PHP_EOL;
// echo "Harga tiket anak / orang " . $tiketa;
// echo PHP_EOL;
// echo "Total harga tiket " . $total;

$tujuan = readline('Tujuan: ');
$jpd = readline('Jumlah Penumpang Dewasa: ');
$jpa = readline('Jumlah Penumpang Anak:');
$tiketd = 0;
$tiketa = 0;
$jktd = 200000;
$bntd = 250000;
$ygyd = 300000;
$jkta = 100000;
$bnta = 125000;
$ygya = 150000;
$diskon = 0;
$hd = 0;
if ($tujuan == 'Jakarta') {
    $tiketd = $jktd;
    $tiketa = $jkta;
}elseif ($tujuan == 'Banten') {
    $tiketd = $bntd;
    $tiketa = $bnta;
}elseif ($tujuan == 'Yogyakarta') {
    $tiketd = $ygyd;
    $tiketa = $ygya;
}


$total = $tiketd * $jpd + $tiketa * $jpa;
if ($total >= 500000) {
    $diskon = $total/100*10;
    $hd = $total - $diskon;
    $diskon = $total - $hd;
}
echo "Harga tiket dewasa / orang " . $tiketd;
echo PHP_EOL;
echo "Harga tiket anak / orang " . $tiketa;
echo PHP_EOL;
echo "Diskon " . $diskon;
echo PHP_EOL;
echo "Total harga tiket " . $hd;


?>