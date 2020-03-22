<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <?php require_once 'core/const.php'; 
            foreach(DATA_ANIMAL as $key=>$value):
        ?>
            <td>
                <?php echo $value;?>
            </td>
            <?php 
                endforeach;
            ?>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href=''>Editar</a></td>
            <td><a onclick="javascript: return confirm('¿Esta seguro de eliminar el registro?');" href=''>Eliminar</a></td>
        </tr>
    </table>
</body>
</html>