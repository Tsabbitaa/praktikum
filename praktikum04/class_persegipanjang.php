<?php
// membuat class persegi panjang
class Persegipanjang{
    // buat property
    private $panjang;
    private $luas;
    const Dua = 2;

    // method
    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->luas = $l;
    }

    // method menghitung luas persegi panjang
    function getLuas(){
        return $this->panjang * $this->luas;
    }

    // method menghitung keliling persegi panjang
    function getKeliling(){
        return self::Dua * ($this->panjang + $this->luas);
    }
}
?>