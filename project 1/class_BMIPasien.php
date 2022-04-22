<?php
require_once 'class_pasien.php';
require_once 'class_BMI.php';

class BMIPasien{
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($tanggal){
        $this->tanggal = $tanggal;
    }
}
?>
