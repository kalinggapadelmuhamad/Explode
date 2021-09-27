<?php 

$text 	= file_get_contents("list.txt");
$ex1 	= explode(',', $text);
$banyak	= count($ex1);

// $hasil  = $ex1[1];
// $res	= explode(" ",$hasil);
// echo $res[3];
// $banyak = count($ex1);

for ($i=0; $i < $banyak ; $i++) { 
	$res	=  explode(" ", $ex1[$i]);
	echo $res[3];
	echo "<br>";
}










?>