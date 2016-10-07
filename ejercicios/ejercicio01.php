
<?php
//inicializamos
echo "Array ordenado inicializado elemento por elemento <hr>";
$array1[]="José ";
$array1[]="Manuel";
$array1[]="Ranfi";
$array1[]="Javier";
$array1[]="Rafa";

$array2=array("Iker","Javier","Ursua","Iñaki","David");

//volcamos la variable para estudiarla y depurar nuestro código. 
//Con var_dump
//O con print_r
//echo "<pre>";
//print_r($array1); 
//secho "</pre>";
echo "Modo 1";
foreach ($array2 as $nombre ) {
	echo "<br>".$nombre.".";
	# code...
}
echo"<hr>";
echo "Modo 2";
for($x=0;$x<count($array1);$x++){
	echo "<br>	".$x." : ". $array1[$x];
}


?>
</body></html>
