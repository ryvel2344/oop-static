<?php

class Produk {
    public static $jumlahProduk = 0;

    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {
    final public function prosesTransaksi($produkList) {
        $total = 0;

        echo "<pre>";
        echo "============ TRANSAKSI ============\n\n";
        echo str_pad("Produk", 15) . str_pad("Harga", 12) . "Qty\n";
        echo "-----------------------------------\n";

        foreach($produkList as $p){
            echo str_pad($p->nama, 15) . 
                 str_pad("Rp " . number_format($p->harga), 12) . 
                 "1\n";

            $total += $p->harga;
        }

        echo "-----------------------------------\n";
        echo "Total Produk : " . Produk::$jumlahProduk . "\n";
        echo "Total Bayar  : Rp " . number_format($total) . "\n";
        echo "Status       : Transaksi diproses\n";
        echo "===================================\n";
        echo "</pre>";
    }
}

$p1 = new Produk("Galon", 45000);
$p1->tambahProduk();

$p2 = new Produk("Kasur", 150000);
$p2->tambahProduk();

$p3 = new Produk("Selimut", 200000);
$p3->tambahProduk();

$daftarProduk = [$p1, $p2, $p3];

$t = new Transaksi();
$t->prosesTransaksi($daftarProduk);

?>
