<?php 



//jualan produk
//komik
//game

interface InfoProduk {

	public function getInfoProduk(); 
}



abstract class Produk {

	//property
	protected  $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

			//construct = salah satu magic method
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul( $judul ){
		//cek judul string apa bukan
		if ( !is_string ($judul) )	{
			throw new Exception("Judul Harus Stiring");
		}
		$this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis( $penulis ){
		$this->penulis = $penulis;
	}

	public function getPenulis (){
		return $this->penulis;
	}

	public function setPenerbit ( $penerbit )	{
		$this->penerbit = $penerbit;
	}

	public function getPenerbit (){
		return $this->penerbit;
	}

	public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

	public function getDiskon () {
		return $this->diskon;
	}

	public function setHarga( $harga ) {
		//cek apakah harga = angka
		if (!is_int($harga)) {
			throw new Exception("Harga harus angka");
		}

		$this->harga = $harga;
	}

	public function getHarga(){
		return $this->harga - ( $this->harga * $this->diskon/100 );
	}

	//method
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfo();

}


//
class Komik extends Produk implements InfoProduk{
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo()	{
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		
		return $str;
	}

	public function getInfoProduk(){
		$str = "Komik : ".$this->getInfo()." - {$this->jmlHalaman} Halaman.";

		return $str;
	}

}

		//extends = menunjukan Parent
		//kelas game anaknya kelas produk
class Game extends Produk implements InfoProduk{
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){
		parent::__construct( $judul, $penulis, $penerbit, $harga);
		$this->waktuMain;
	}

	public function getInfo()	{
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		
		return $str;
	}

	public function getInfoProduk(){ //:: = method statik
		$str = "Game : ".$this->getInfo()." - {$this->waktuMain} Jam.";

		return $str;
	}
}


class CetakInfoProduk	{
	public $daftarProduk = [];

	public function tambahProduk( Produk $produk )	{
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){
		$str = "Daftar Produk : <br>";

		foreach ( $this->daftarProduk as $p ) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}


//ini namannya instasiasi objek
$produk1 = new Komik("Naruto", "Massashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak(); 