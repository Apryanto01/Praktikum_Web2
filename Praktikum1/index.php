<?php

//ini sebuah komentar
/*
ini sebuah komentar
lhasahoshahsahsaihs
*/
// echo "Hello world";
// print_r("Nnama Saya Apriyanto <br>");
// var_dump("Kuliah di STT Terpadu Nurul Fikri");

// Membuat  variable user
$nama = "Apriyanto";
$umur = 21;
$berat = 50.2;
$mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya adalah $umur tahun <br>";
// echo "Berat badan $berat kg  <br>";

// Membuat variabel sistem
// echo "Dokument root " . $_SERVER["DOCUMENT_ROOT"];
// echo "Nma File " . $_SERVER['PHP_SELF'];

// Membuat variabel konstanta
// define("PHI", 3.14);
// $jari = 8;
// $luas = PHI * $jari *$jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari = $jari = $luas <br>";
// echo "keliling lingkaran adalah $keliling";

//Membuat Array
$programs = ["php", "Javascrippt", "HTML" "CSS"];
// echo $programs[0];
// echo count($programs);
// $programs[] = "Mysql";
// echo count($programs);

// unset($programs[0]);
// echo "<br>" . $programs[0];

// echo "<ol>";
foreach($programs as $programs){
    echo "<li> $programs </li>";
}
echo "/ol>";
?>