<?php 



//jualan produk
//komik
//game

class Produk {

	//property
	public  $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;


	//method
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}


}

//ini namannya instasiasi objek
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Massashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : ". $produk3->getLabel();
echo "<hr>";
echo "Game : ". $produk4->getLabel();