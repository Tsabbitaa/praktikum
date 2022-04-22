<?php
class Bmi{
    public $berat;
    public $tinggi;

    function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function nilaiBMI(){
        $nilaiBMI = $this->berat / $this->tinggi * $this->tinggi;
        return $nilaiBMI;
    }

    public function statusBMI($nilaiBMI){
        if ($nilaiBMI >=30.0){
            return 'Kegemukan (Obesitas)';
        }elseif ($nilaiBMI >=25.0 && $nilaiBMI <=29.9) {
            return 'Kelebihan berat badan';
        }elseif ($nilaiBMI >=24.9 && $nilaiBMI <=18.5) {
            return 'normal (ideal)';
        }else{
            return 'Kekurangan berat badan';
        }
    }
}
?>