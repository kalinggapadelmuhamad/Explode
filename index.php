<?php 

$list 		= file_get_contents("list.txt");
$explode 	= explode(',', $list);
$banyakData	= count($explode);

for ($i = 0; $i < $banyakData ; $i++) { 
	$result	= explode(" ", $explode[$i]);
	$result	= substr($result[3],1,-1);
	echo $result."<br>";
}










?>