<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data BMI Pasien</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    
<div class="container">
<h1>Data BMI Pasien</h1>
<?php
class Pasien{
    public $id;
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;

    function __construct($kode, $nama, $gender){
        $this -> kode = $kode;
        $this -> nama = $nama;
        $this -> gender = $gender;
    }
}

class Bmi{
    public $berat;
    public $tinggi;
    public $bmi;

    function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;

    }

    public function nilaiBMI(){
        $nilaiBMI = $this->berat / pow($this->tinggi,2);
        $this->bmi = $nilaiBMI;
        return $nilaiBMI;
    }

    public function statusBMI(){
        if ($this->bmi >=30.0){
            return 'Kegemukan (Obesitas)';
        }elseif ($this->bmi >=25.0 && $this->bmi <=29.9) {
            return 'Kelebihan berat badan';
        }elseif ($this->bmi >=24.9 && $this->bmi <=18.5) {
            return 'normal (ideal)';
        }else{
            return 'Kekurangan berat badan';
        }
    }
}

class BMIPasien{
    public $id;
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($tanggal){
        $this->tanggal = $tanggal;
    }
}

$_id = $_POST["kode"];
$_namaPasien = $_POST["nama"];
$_gender = $_POST["gender"];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];

$psn1 = new Bmi("$_berat", "$_tinggi");


?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat (Kg)</th>
            <th>Tinggi (Cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2022-01-10</td>
            <td>P001</td>
            <td>Ahmad</td>
            <td>L</td>
            <td>69.8</td>
            <td>169</td>
            <td>24.7</td>
            <td>Kelebihan Berat Badan</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2022-01-10</td>
            <td>P002</td>
            <td>Rina</td>
            <td>P</td>
            <td>55.3</td>
            <td>165</td>
            <td>20.3</td>
            <td>Normal (Ideal)</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2022-01-11</td>
            <td>P003</td>
            <td>Lutfi</td>
            <td>L</td>
            <td>45.2</td>
            <td>171</td>
            <td>15.4</td>
            <td>Kekurangan Berat Badan</td>
        </tr>
        <tr>
            <td>4</td>
            <td>2022-01-11</td>
            <td><?php echo $_POST["kode"];?></td>
            <td><?php echo $_POST["nama"]?></td>
            <td><?php echo $_POST["gender"];?></td>
            <td><?php echo $_POST["berat"];?></td>
            <td><?php echo $_POST["tinggi"];?></td>
            <td><?=$psn1->nilaiBMI()?></td>
            <td><?=$psn1->statusBMI()?></td>
        </tr>
    </tbody>
 </table> 
</div>

</body>
</html>
