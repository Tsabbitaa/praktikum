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
require_once 'class_BMIPasien.php';
require_once 'class_pasien.php';
require_once 'class_BMI.php';

$id = $_POST["kode"];
$namaPasien = $_POST["nama"];
$gender = $_POST["gender"];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];

$hitung_bmi = new Bmi($_berat, $_tinggi);
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
            <td><?php echo $hitung_bmi?></td>
            <td></td>
        </tr>
    </tbody>
 </table> 
</div>

</body>
</html>