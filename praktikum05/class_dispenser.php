<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function set_isi($vol){
        $this->volume = $vol;
        echo "Volume galonnya adalah {$this->volume} Ml";
        echo "<br/>";
    }
    public function set_harga($har){
        $this->hargaSegelas = $har;
        echo "Harga segelas nya adalah {$this->hargaSegelas} Rupiah";
        echo "<br/>";
    }
    public function set_gelas($volgel){
        $this->volumeGelas = $volgel;
        echo "Andi beli air 1 gelas yang volume nya {$this->volumeGelas} Ml";
        echo "<br/>";
    }
    public function set_hasil($vol, $volgel){
        $this->volume = $vol;
        $this->volumeGelas = $volgel;
        $hasil = $vol - $volgel;
        echo "Hasil Volume sekarang adalah {$hasil} Ml";
    }
}
$aqua = new Dispenser();
$aqua -> namaMinuman = 'Aqua';

echo "Nama Minuman {$aqua -> namaMinuman}";
echo "<hr/>";
$aqua -> set_isi(1000);
$aqua -> set_harga(3000);
$aqua -> set_gelas(250);
$aqua -> set_hasil(1000, 250);
?>