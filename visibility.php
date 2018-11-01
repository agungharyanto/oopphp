<?php 



//jualan produk
//komik
//game

class Produk {

	//property
	public  $judul,
			$penulis,
			$penerbit;

	private	$harga,
			$diskon = 0;

			//construct = salah satu magic method
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getHarga(){
		return $this->harga - ( $this->harga * $this->diskon/100 );
	}

	//method
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		
		return $str;
	}
}


//
class Komik extends Produk {
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk(){
		$str = "Komik : ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman.";

		return $str;
	}

}

		//extends = menunjukan Parent
		//kelas game anaknya kelas produk
class Game extends Produk {
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){
		parent::__construct( $judul, $penulis, $penerbit, $harga);
		$this->waktuMain;
	}

	public function getInfoProduk(){ //:: = method statik
		$str = "Game : ".parent::getInfoProduk()." - {$this->waktuMain} Jam.";

		return $str;
	}
}


class CetakInfoProduk	{
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


//ini namannya instasiasi objek
$produk1 = new Komik("Naruto", "Massashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();
