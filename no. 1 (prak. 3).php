<!-- Haya Fadhilah -->
<!--- 20051397005 --->
<!---- MI_2020_A ---->
<!--- Praktikum 3 --->


<?php
//Tabungan
class Tabungan{
    protected $saldo;
}

//Pengambilan Saldo
class PengambilanUang extends Tabungan {
    private $proteksi;
    public function construct($saldo) {
        $this->saldo = $saldo;
        $this->proteksi = 1000;
    }
    public function getSaldo(){
        return 'Uang yang ditabung : ' .$this->saldo. '<br> Uang yang diproteksi : '. $this->proteksi;
    }
    public function ambilUang($jumlah) {
        if ($jumlah === 4500) { 
            return 'Uang yang akan diambil: '. $jumlah . 'false <br> Saldo sekarang : '. $this->saldo;
        }
        else {
            return 'Uang yang akan diambil : '. $jumlah . ' true <br> Saldo sekarang: '. $this->saldo -= $jumlah;
        }
    }
}

// Run Program
Stabungan = new PengambilanUang(5000);
echo $tab.ungan->getSaldo(); 
echo '<br> -------------------------------------- <br>';
echo $tabungan->ambil Uang(4500);
echo '<br> -------------------------------------- <br>';
echo $tabungan->ambilUang(2500);

?>