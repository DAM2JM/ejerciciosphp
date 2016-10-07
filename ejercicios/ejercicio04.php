<?php
function mayor($array1){
	$x=0;
	foreach ($array1 as $valor) {
		if($valor>$x){
			$x=$valor;
		}
	}
	return $x;
}
function menor($array){
	$x=$array[0];
	foreach ($array as $valor) {
		if($valor<$x){
			$x=$valor;
		}
	}
	return $x;
}

echo "array1=(23,43,2,55,100000)";
$array=array(23,43,2,55,10000);
echo "<br>";
echo "resultado mayor: ".mayor($array);
echo "<br>";
echo "resultado menor: ".menor($array);
?>