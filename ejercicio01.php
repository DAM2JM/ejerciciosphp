
<?php
//inicializamos
echo "Array ordenado inicializado elemento por elemento <hr>";
$array1[]="José ";
$array1[]="Manuel";
$array1[]="Ranfi";
$array1[]="Javier";
$array1[]="Rafa";

//volcamos la variable para estudiarla y depurar nuestro código. 
//Con var_dump
var_dump($array1);
//O con print_r
echo "<pre>";
print_r($array1); 
echo "</pre>";

for($x=0;$x<count($array1);$x++){
	echo "	".$x." : ". $array1[$x];
}
/*
//la podemos recorrer con el bucle foreach de dos maneras:
echo "<hr> Recorrido mediante bucle foreach simple <br>";
foreach ($array1 as $element){
    echo $element . '<br>';
}
//foreach clave->elemento
echo "<hr> Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}*/
?>
</body></html>