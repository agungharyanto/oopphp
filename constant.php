<?php 

define ('NAMA','Agung Haryanto');
echo NAMA;

echo "<br>";

const UMUR = 25;
echo UMUR;
echo "<br>";

class Coba {
	const NAME = "Agung";
}

echo Coba::NAME;
echo "<br>";

//untuk menampilkan baris dimana ditulis 
echo __LINE__;
echo "<br>";


//untuk menampilkan lokasi file saat ini
echo __FILE__;
echo "<br>";

//untuk menampilkan lokasi function 
function test(){
	return __FUNCTION__;
}

echo test();
echo "<br>";



//untuk menampilkan lokasi klass
class Test2 {
	public $kelas = __CLASS__;

}

$obj = new Test2;
echo $obj->kelas;





?>