<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/Ejercicio2/CSS/style.css">
</head>
<body>
    <h1>CRUD Sonido Digital</h1>
    
    <?php
        require 'controladorSonido.php';
    ?>

    <?php if (isset($_POST['editar'])) {  ?>
        
        <?php $id = $_POST['id']; ?>
        <?php $sonido = $sonidos[$id]; ?>

        <h2>Editar Automovil</h2>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <span for="referencia" class="input-group-text" id="inputGroup-sizing-default">Referencia</span>
            <input type="number" name="referencia" value="<?php echo $sonido->getReferencia(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="cantidadStock" class="input-group-text" id="inputGroup-sizing-default">Cantidad en Stock</span>
            <input type="number" name="cantidadStock" value="<?php echo $sonido->getCantidadStock(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="precio" class="input-group-text" id="inputGroup-sizing-default">Precio</span>
            <input type="number" name="precio" value="<?php echo $sonido->getPrecio(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
            <br>
            <span for="pesoKg" class="input-group-text" id="inputGroup-sizing-default">Peso en Kg</span>
            <input type="number" name="pesoKg" value="<?php echo $sonido->getPesoKg(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <button type="submit" name="actualizar" class="btn btn-success">Actualizar</button>
        </form>
    <?php } ?>

    <?php if(isset($_POST['nuevo'])) { ?>
        <h2>Registrar Sonido Digital</h2>

        <form method="post">
            <span for="referencia" class="input-group-text" id="inputGroup-sizing-default">Referencia</span>
            <input type="number" name="referencia" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="cantidadStock" class="input-group-text" id="inputGroup-sizing-default">Cantidad en Stock</span>
            <input type="number" name="cantidadStock" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="precio" class="input-group-text" id="inputGroup-sizing-default">Precio</span>
            <input type="number" name="precio" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
            <br>
            <span for="pesoKg" class="input-group-text" id="inputGroup-sizing-default">Peso en Kg</span>
            <input type="number" name="pesoKg" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <button type="submit" name="crear" class="btn btn-success">Crear</button>
        </form>
    
    <?php  } ?>

   <?php if(isset($_POST['vender'])) { ?>
        <?php $id = intval($_POST['id']); ?>
        <?php $sonido = $sonidos[$id]; ?>

        <h2>Vender Sonido Digital</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <span for="referencia" class="input-group-text" id="inputGroup-sizing-default">Referencia</span>
            <input type="number" name="referencia" value="<?php echo $sonido->getReferencia(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="cantidadStock" class="input-group-text" id="inputGroup-sizing-default">Cantidad en Stock</span>
            <input type="number" name="cantidadStock" value="<?php echo $sonido->getCantidadStock(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="precio" class="input-group-text" id="inputGroup-sizing-default">Precio</span>
            <input type="number" name="precio" value="<?php echo $sonido->getPrecio(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
            <br>
            <span for="pesoKg" class="input-group-text" id="inputGroup-sizing-default">Peso en Kg</span>
            <input type="number" name="pesoKg" value="<?php echo $sonido->getPesoKg(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="cantidad" class="input-group-text" id="inputGroup-sizing-default">Cantidad</span>
            <input type="number" name="cantidad" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <button type="submit" name="confirmar" class="btn btn-success">Confirmar</button>
        </form>

    <?php } ?> 
    <br>
    <form method="post">
        <button type="submit" name="nuevo" class="btn btn-primary">Nuevo</button>
    </form>

    <br>
    <h2>Lista De Sonidos Digitales</h2>
    <table class="table-elegant">
        <thead>
            <tr>
                <th># Referencia</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($sonidos as $id => $sonido) { ?> 
            <tr>
                <td><?php echo $sonido->getReferencia();?></td>
                <td><?php echo $sonido->getCantidadStock();?></td>
                <td><?php echo $sonido->getPrecio();?></td>
                <td><?php echo $sonido->getPesoKg();?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" name="editar" class="btn btn-warning">Editar</button>
                        <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
                        <button type="submit" name="vender" class="btn btn-primary">Vender</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <br>
    
</body>
</html>