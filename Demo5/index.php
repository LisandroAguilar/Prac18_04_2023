<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálago de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <div>
        <table>
            <a href="nuevoproducto.php">Nuevo</a>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'Models/Producto.php';
                    $producto=new Producto();
                    $resultado=$producto->ObtenerProductos();
                    if(count($resultado)>0){
                        foreach ($resultado as $registro) {
                            echo '<tr>';
                            echo '<td>'.$registro['Id'].'</td>';
                            echo '<td>'.$registro['Nombre'].'</td>';
                            echo '<td>'.$registro['Precio'].'</td>';
                            echo '<td>'.$registro['Existencias'].'</td>';
                            echo '<td><a href=""> Eliminar</a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>