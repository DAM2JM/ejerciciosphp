<?php
$array1 = array (
    'base' => 'Juan',
    'escolta' => 'Manuel',
    'alero' => 'García',
    'alapivot' => 'Iker',
    'pivot' => 'Maria'
); 
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
} 
echo "<pre>"; 
var_dump($array1);
echo "</pre>"; 
?>