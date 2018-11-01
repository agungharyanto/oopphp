<?php 


class ContohStatic {
	public static $angka = 1;

	public static function halo() {
		return "Halo.";
	} 

	public static function test(){
		return "test " . self::$angka++ . " kali.";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::test();
echo "<br>";
echo ContohStatic::test();
echo "<br>";
echo ContohStatic::test();
echo "<hr>";

class Contoh{
	public static $angka = 1;

	public function lagi(){
		return "lagi" . self::$angka++ . " kali. <br>";
	}

}
$obj = new Contoh;
echo $obj->lagi();
echo $obj->lagi();
echo $obj->lagi();

echo "<hr>";
$obj2 = new Contoh;
echo $obj2->lagi();
echo $obj2->lagi();
echo $obj2->lagi();