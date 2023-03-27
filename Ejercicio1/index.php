<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Web</title>
</head>
<body>
    <header>
        <h1>Servicio Militar Colombiano</h1>
    </header>
    
    <?php
        require 'controlador.php';
    ?>

    <?php if(isset($_POST['editar'])){ ?>
        <?php $id = $_POST['id']; ?>
        <?php $usuario = $usuarios[$id]; ?>

        <h2>Editar Usuario</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php  echo $usuario->getNombre(); ?>" required>
            <br>
            <label for="apellido">Apellido:</label> 
            <input type="text" name="apellido" value="<?php  echo $usuario->getApellido(); ?>" required>
            <br>
            <label for="edad">Edad:</label> 
            <input type="number" name="edad" value="<?php  echo $usuario->getEdad(); ?>" required>
            <br>
            <label for="genero">Genero:</label>
            <select name="genero" value=<?php  echo $usuario->getGenero();?>>
                <option value="Mujer">Mujer</option>
                <option value="Hombre">Hombre</option>
            </select>
            <br>
            <label for="hijoUnico" value=<?php  echo $usuario->getHijoUnico();?>>Hijo Unico</label>
            <select name="hijoUnico">
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
            <br>
            <br>
            <button type="submit" name="actualizar">Actualizar</button>
        </form>
    <?php } ?>

    <?php if(isset($_POST['nuevo'])) { ?>

        <h2>Crear Usuario</h2>
        <form method="post">
            <label for="nombre">Nombre:
                <input type="text" name="nombre" required>
            </label>
            <br>
            <label for="apellido">Apellido:
                <input type="text" name="apellido" required>
            </label>
            <br>
            <label for="edad">Edad:
                <input type="number" name="edad" required>
            </label>
            <br>
            <label for="genero">Genero:
                <select name="genero">
                    <option value="Mujer">Mujer</option>
                    <option value="Hombre">Hombre</option>
                </select>
            </label>
            <br>
            <label for="hijoUnico">Hijo Unico:
                <select name="hijoUnico">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </label>
            <br>

            <button type="submit" name="crear">Crear</button>
        </form>
    <?php } ?>

    <br>

    <form method="post">
        <button type="submit" name="nuevo">nuevo</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Hijo Unico</th>
                <th>Serivicio Militar</th> 
            </tr>
        </thead>

        <tbody>
            <?php foreach ($usuarios as $id => $usuario){?>
                <tr>
                    <td><?php echo $usuario->getNombre(); ?></td>
                    <td><?php echo $usuario->getApellido(); ?></td>
                    <td><?php echo $usuario->getEdad(); ?></td>
                    <td><?php echo $usuario->getGenero(); ?></td>
                    <td><?php echo $usuario->getHijoUnico(); ?></td>
                    <td><?php echo $usuario->requisito();?></td> 
                    <td>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <button type="submit" name="editar">Editar</button>
                            <button type="submit" name="eliminar">Eliminar</button>
                        </form> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>