<?php 
//Método post para enviar, get para recibir, request ambos.
if($_SERVER['REQUEST_METHOD']=='POST'){ //Verificar tipo POST o GET
$name=$_REQUEST['name'];
$lastName=$_REQUEST['lastName'];
$address=$_REQUEST['adress'];
$phone=$_REQUEST['phone'];
$sex=$_REQUEST['sex'];
echo "Nombre: $name Apellido: $lastName Direccion: $adress Telefono: $phone Sexo: $sex";
header("location: index.php?answer=Datos recibidos&name={$name}"); //Servidor - cliente
}
?>