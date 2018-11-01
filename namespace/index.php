<?php

require_once 'App/init.php';

//ini namannya instasiasi objek
$produk1 = new Komik("Naruto", "Massashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak(); 

new App\Service\User();
echo "<br>";
new App\Produk\User();

//namespace bisa dibuat alias
echo "<hr>";
use App\Service\User as ServiceUser;
new ServiceUser();
echo "<br>";
use App\Produk\User as ProdukUser;
new ProdukUser();