<?php 



//jualan produk
//komik
//game

class Produk {

	//property
	public  $judul,
			$penulis,
			$penerbit,
			$harga;

			//construct = salah satu magic method
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	//method
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}


}

//ini namannya instasiasi objek
$produk1 = new Produk("Naruto", "Massashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);

echo "Komik : ". $produk1->getLabel();
echo "<hr>";
echo "Game : ". $produk2->getLabel();