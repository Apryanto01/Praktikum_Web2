<?php
$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$UAS = $_GET['UAS'];
$TUGAS = $_GET['TUGAS'];
$UTS = $_GET['UTS'];
$total_nilai = ($TUGAS + $UTS +$UAS) / 3;

if($total_nilai > 75){
    $keterangan = "LULUS";
}else {
    $keterangan = "TIDAK LULUS";
}




?>