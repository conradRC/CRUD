<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <! -- Método post para enviar datos al servidor, utilizado para informacion sensible, tamaño 8mb-->
    <! -- Método get para recibir datos al servidor, no sensible (se muestra en el URl), tamaño 1607 caracteres-->
    <! -- Comunicacion CLIENTE - SERVIDOR-->
    <form method='POST' action='form.php'>
        <table>
            <?php
                $array = array ('name'=>'Nombre', 'lastName'=> 'Apellido', 'adress'=> 'Direccion', 'phone'=> 'Telefono');
                foreach($array as $key=>$value ):?>
            <tr>
                <td> 
                    <?php echo $value?>
                </td>
                <td>
                    <input type="text" name=<?php echo $key?>>
                </td>
            </tr>
            <?php endforeach; ?>    
            <tr>
                <td>
                    Sexo 
                </td>
                <td>
                    <input type = "radio" name='sex' value="Mujer"> Mujer
                    <input type = "radio" name='sex' value="Hombre"> Hombre
                </td>
            </tr>
            <tr>
                <td>
                    <input type= "submit" name='submit' value="Guardar">
                </td>
            </tr>
        </table>
    </form>
    <h1>
        <?php echo " {$_GET['answer']} gracias, {$_GET['name']}";?>    <! -- Comunicacion SERVIDOR - CLIENTE-->
    </h1>
</body>
</html>
