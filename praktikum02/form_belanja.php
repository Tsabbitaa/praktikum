<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" style="display: ">
<form method="POST" action="form_belanja.php">
    <div class="container">
    <h2>Belanja Online</h2>
    <hr/>
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-4">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="pilih_produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="pilih_produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
        <label for="pilih_produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-4">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="proses" type="submit" value="kirim" class="btn btn-success">Kirim</button>
    </div>
  </div>
  </div>
</form>
<div class="container"
style="position: absolute; top: 8px; right: 16px; width: 15cm;">
    <table class="table">
    <thead class="p-3 mb-2 bg-primary text-white">
        <tr>
        <th scope="col">Daftar Harga</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">TV : 4.200.000</th>
        </tr>
        <tr>
        <th scope="row">kulkas : 3.100.000</th>
        </tr>
        <tr>
        <th scope="row">MESIN CUCI : 3.800.000</th>
        </tr>
    </tbody>
    </table>

    <table class="table">
    <thead class="p-3 mb-2 bg-primary text-white">
        <tr>
        <th scope="col">Harga Dapat Berubah Setiap Saat</th>
        </tr>
    </thead>
    </table>
</div>
<hr/>
</div>

<div class="container">
<?php
$nama = $_POST['customer'];
$banyak = $_POST['jumlah'];
$pilihan = $_POST['pilih_produk'];
if($pilihan == "tv"){
    $harga = 4200000;
}elseif($pilihan == "kulkas"){
    $harga = 3100000;
}else{
    $harga = 3800000;
}
$total = $banyak * $harga;

echo "Nama Customer : $nama";
echo "<br/>Produk Pilihan : $pilihan";
echo "<br/>Harga satuan : $harga";
echo "<br/>Jumlah Beli : $banyak";
echo "<br/>Total Belanja : $total";
?>
</div>

</body>
</html>