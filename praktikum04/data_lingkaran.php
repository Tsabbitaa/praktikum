<?php
// panggil file atau class_lingkaran.php
require_once 'class_lingkaran.php';
echo "Nilai PHI adalah = " . Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo"<br/>";
// menghitung luas lingkaran menggunakan getluas
echo "<br/>Luas Lingkaran I adalah =" .$lingkar1->getluas();
echo "<br/>Luas Lingkaran II adalah =" .$lingkar2->getluas();
echo "<br/>";

// menghitung keliling lingkaran menggunakan fungsi getkeliling
echo "<br/>keliling lingkaran I adalah = ".$lingkar1->getkeliling();
echo "<br/>keliling lingkaran II adalah = ".$lingkar2->getkeliling();
?>