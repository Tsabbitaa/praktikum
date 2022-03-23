<?php
// membuat class manusia
class Manusia{
    // buat property
    var $nama;
    var $warna;

    // buatlah method atau function
    function tampilkan_nama(){
        return 'Nama saya adalah Tsabita Asy Syahidah';
    }

    function warna_kulit(){
        return '<br/>Kulit saya berwarna coklat';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>