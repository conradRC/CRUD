<?php 
$loginSuccessful=false;

if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    $userName=$_SERVER['PHP_AUTH_USER']; 
    $userPassword=$_SERVER['PHP_AUTH_PW'];
    if($userName=='Conrad' && $userPassword=='holi'){
        $loginSuccessful=true;
    }
}

if(!$loginSuccessful){
    header('WWW-Authenticate:Basic');       
    header('HTTP/1.0 401 Unauthorizated');
    echo "Error, acceso denegado";
}
else{
    echo "Bienvenido";
}
?>