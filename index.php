<?php
require_once 'animal.php';

$animal= new Animal();
print_r($animal->getAll());   

//$animal->id=12; //para actualizar se descomenta
$animal->name='Zeris';   
$animal->specie='Oso Polar';   
$animal->breed='Ailuropoda';   
$animal->gender='Hembra';   
$animal->age='12';   
$animal->color='Blanco';   
//$animal->create();
//$animal->update();
?>