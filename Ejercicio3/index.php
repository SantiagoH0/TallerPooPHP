<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <h1>CRUD Cine Colombia</h1>

    <?php
        require 'controlador.php';
    ?>
    
    <?php if(isset($_POST['editar'])) { ?> 
        <?php $id = $_POST['id']; ?>
        <?php $pelicula = $peliculas[$id]; ?>

        <h2>Editar Pelicula</h2>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <span for="titulo" class="input-group-text" id="inputGroup-sizing-sm">Titulo</span>
            <input type="text" name="titulo" required value="<?php echo $pelicula->getTitulo(); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            <br>
            <span for="anio" class="input-group-text" id="inputGroup-sizing-sm">Año</span>
            <input type="number" name="anio" required value="<?php echo $pelicula->getAnio(); ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            <br>
            <select name="genero" class="form-select" aria-label="Default select example">
                <label name="genero" for="genero" selected value="<?php echo $pelicula->getGenero();?>">Genero</label>
                <option value="accion">Accion</option>
                <option value="drama">Drama</option>
                <option value="ficcion">Ficcion</option>
                <option value="comedia">Comedia</option>
            </select>
            <br>
            <button type="submit" name="actualizar" class="btn btn-success">Actualizar</button>
        </form>
    
    <?php } ?>

    <?php if(isset($_POST['nuevo'])) { ?> 
        <h2>Registrar Pelicula</h2>

        <form method="post">
            <span for="titulo" class="input-group-text" id="inputGroup-sizing-sm">Titulo</span>
            <input type="text" name="titulo" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            <br>
            <span for="anio" class="input-group-text" id="inputGroup-sizing-sm">Año</span>
            <input type="number" name="anio" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            <br>
            <select name="genero" class="form-select" aria-label="Default select example">
                <option for="genero" name="genero" selected>Genero</option>
                <option value="accion">Accion</option>
                <option value="drama">Drama</option>
                <option value="ficcion">Ficcion</option>
                <option value="comedia">Comedia</option>
            </select>
            <br>
            <button type="submit" name="crear" class="btn btn-success">Crear</button>
        </form>
    <?php } ?>
    
    <br>
    <form method="post">
        <button type="submit" name="nuevo" class="btn btn-primary">Nuevo</button>
    </form>
    <br>

    <h2>Lista de Peliculas</h2>
    <table class="elegant">
        <thead>
            <tr>
               <th>Titulo</th>
               <th>Año</th>
               <th>Genero</th> 
               <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($peliculas as $id => $pelicula) { ?>
                <tr>
                    <td><?php echo $pelicula->getTitulo();?></td>
                    <td><?php echo $pelicula->getAnio();?></td>
                    <td><?php echo $pelicula->getGenero();?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <button type="submit" name="editar" class="btn btn-warning">Editar</button>
                            <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <h2>Contador Genero</h2>
    <table>
        <thead>
            <tr>
                <th>Accion</th>
                <th>Ficcion</th>
                <th>Drama</th>
                <th>Comedia</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $contAccion=0;
                $contFiccion=0;
                $contDrama=0;
                $contComedia=0;

                foreach($peliculas as $pelicula){
                    $contAccion += $pelicula->getGenero() == 'accion' ? 1:0;
                    $contFiccion += $pelicula->getGenero() == 'ficcion' ? 1:0;
                    $contDrama += $pelicula->getGenero() == 'drama' ? 1:0;
                    $contComedia += $pelicula->getGenero() == 'comedia' ? 1:0;
                }
            ?>
            <tr>
                <td><?php echo  $contAccion;?></td>
                <td><?php echo  $contFiccion;?></td>
                <td><?php echo  $contDrama;?></td>
                <td><?php echo  $contComedia;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>