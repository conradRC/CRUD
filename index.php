<?php 
    session_start(['name'=> 'CONRAD']); //Cada vez que usemos sesiones
    //session_destroy();  //Eliminar sessiones
    unset($_SESSION['nameSession']); //Eliminar una session
    if(session_status()==PHP_SESSION_DISABLE){
        
    }
    if(isset($_SESSION['nameSession'])){
        echo 'Bienvenido : '.$_SESSION['nameSession'];
        $_SESSION['nameSession']='Cliente'; //Modificar el valor de la session

    }
    else{
        echo "Sesión no iniciada";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action='login_session.php' method='post'>
        Usuario   : <input type="text" name='userName'></br>
        Contraseña: <input type="text" name='userPassword'></br>
       <input type="submit" name='send' text='Enviar'>
    </form>

</body>
</html>