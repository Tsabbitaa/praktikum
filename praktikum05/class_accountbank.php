<?php
class Account{
    public $nomor;
    public $nama;
    public $saldo;

    public function __construct($nomor, $nama, $saldo){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }
    public function daftar(){
        echo "{$this->nomor} {$this->nama} {$this->saldo}";
    }
}
class AccountBank extends Account{
    public function message(){
        echo "{$this->nama} nabung {$this->saldo}";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>