<?php
function ordena($array1){
	sort($array1);
	/*foreach ($variable as $key ) {
		echo"-".$key;
	}*/
	return ($array1);
}
$array1=array(4,7,3,1,35,765);
$array_ordenado=ordena($array1);
foreach ($array_ordenado as $key) {
	echo "-".$key;
}
?>