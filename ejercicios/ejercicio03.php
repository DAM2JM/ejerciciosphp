<?php
$array1=array(
'base'=>array('Jose','Manuel'),
'escolta'=>array('Ranfi','Iker'),
'alero'=>array('Raul','Jorge'),
'alapivot'=>array('Mikel','David'),
'pivot'=>array('Marcos','Fran')
);
echo "Modo 1";
echo "<ul>";
foreach ($array1 as $id => $value) {
	echo "<li>".$id;
	echo "<ul>";
	foreach ($value as $nombre) {
		echo "<li>".$nombre."</li>";
	}
	echo "</ul>";
	echo "</li>";
}
echo "</ul>";
echo "<pre>";
var_dump($array1);
echo "</pre>";
?>