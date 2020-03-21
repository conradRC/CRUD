<?php 
$user='Conrad';
$pass='Holi';

session_start(); //Que archivos utilizan sesiones  
if($_POST['userName']==$user && $_POST['userPassword']==$pass){
    $_SESSION['nameSession']='Administrador';
    header('Location: index.php');
}
else{
    echo "Usuario y Contraseña no válidos";
}

?>