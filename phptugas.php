<?php

class motor {
public $merk="honda";
public $Warna="hitam";
public $roda="2";

function setmotor ($merk,$warna)
{
	$this->merk = $merk
	$this->warna = $warna
}

//memanggil nilai
function getmotor(){
	echo $this->merk."<br>";
	echo $this->warna."<br>";
	}
}

//panggil class motor
$motor = new motor();

//variable motor
$merk = 'honda';
$warna = 'hitam';

//panggil fungsi nilai

$motor->setmotor ($merk, $warna);
$motor->getmotor();
?>
