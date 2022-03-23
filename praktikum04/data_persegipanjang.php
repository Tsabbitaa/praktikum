<?php
// memanggil class dari file class_persegipanjang.php
require_once 'class_persegipanjang.php';
echo "nilai Dua adalah = ". Persegipanjang::Dua;
$persegipanjang1 = new Persegipanjang(14, 6);
$persegipanjang2 = new Persegipanjang(18, 9);
echo "<br/>";
// hitung luas persegi panjang dengan getLuas
echo "<br/>Luas Lingkaran 1 adalah = ". $persegipanjang1->getLuas();
echo "<br/>Luas Lingkaran 2 adalah = ". $persegipanjang2->getLuas();
// hitung keliling persegi panjang dengan getKeliling
echo "<br/>Keliling Lingkaran 1 adalah = ". $persegipanjang1->getKeliling();
echo "<br/>Keliling Lingkaran 2 adalah = ". $persegipanjang2->getKeliling();
?>