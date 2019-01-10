<?php 

//define('NAMA', 'Sri Lestari');
//echo NAMA;

//echo "<br>";

//const UMUR = 17;
//echo UMUR;

//class Coba {
//	const NAMA ='Sri Lestari';
//}

//echo Coba::NAMA;



//echo __FILE__;


// function Coba() {
// 	return __FUNCTION__;
// }

// echo Coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;





 ?>