<?php
// contoh function tidak menggunakan parameter
function nama (){
    $nama = "Tsabita Asy Syahidah";
    echo "nama saya adalah $nama";
};
// contoh function menggunakan parameter
function umur_kelas($age){
    $umur = $age - 2023;
    $kelas = "SI11";
    echo "<br/>umur saya sekarang adalah $umur <br/> saya kelas $kelas";
}
nama();
umur_kelas(2002);
?>