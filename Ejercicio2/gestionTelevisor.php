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
    <h1>CRUD Televisor Smart</h1>
    
    <?php
        require 'controladorTelevisor.php';
    ?>

    <?php if (isset($_POST['editar'])) {  ?>
        
        <?php $id = $_POST['id']; ?>
        <?php $televisor = $televisores[$id]; ?>

        <h2>Editar Televisor Smart</h2>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <span for="referencia" class="input-group-text" id="inputGroup-sizing-default">Referencia</span>
            <input type="number" name="referencia" value="<?php echo $televisor->getReferencia(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="cantidadStock" class="input-group-text" id="inputGroup-sizing-default">Cantidad en Stock</span>
            <input type="number" name="cantidadStock" value="<?php echo $televisor->getCantidadStock(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="precio" class="input-group-text" id="inputGroup-sizing-default">Precio</span>
            <input type="number" name="precio" value="<?php echo $televisor->getPrecio(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
            <br>
            <span for="consumoEnerg" class="input-group-text" id="inputGroup-sizing-default">Consumo Energetico</span>
            <input type="number" name="consumoEnerg" value="<?php echo $televisor->getConsumoEnerg(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
            <br>
            <span for="tamano" class="input-group-text" id="inputGroup-sizing-default">Tamaño</span>
            <input type="number" name="tamano" value="<?php echo $televisor->getTamano(); ?>" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <button type="submit" name="actualizar" class="btn btn-success">Actualizar</button>
        </form>
    <?php } ?>

    <?php if(isset($_POST['nuevo'])) { ?>
        <h2>Registrar Televisor Smart</h2>

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
            <span for="consumoEnerg" class="input-group-text" id="inputGroup-sizing-default">Consumo Energetico</span>
            <input type="number" name="consumoEnerg" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
            <br>
            <span for="tamano" class="input-group-text" id="inputGroup-sizing-default">Tamaño</span>
            <input type="number" name="tamano" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <button type="submit" name="crear" class="btn btn-success">Crear</button>
        </form>
    
    <?php  } ?>

    <?php if(isset($_POST['vender'])) { ?>
        <?php $id = intval($_POST['id']); ?>
        <?php $televisor = $televisores[$id]; ?>

        <h2>Vender Sonido Digital</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <span for="referencia" class="input-group-text" id="inputGroup-sizing-default">Referencia</span>
            <input type="number" name="referencia" value="<?php echo $televisor->getReferencia(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="cantidadStock" class="input-group-text" id="inputGroup-sizing-default">Cantidad en Stock</span>
            <input type="number" name="cantidadStock" value="<?php echo $televisor->getCantidadStock(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="precio" class="input-group-text" id="inputGroup-sizing-default">Precio</span>
            <input type="number" name="precio" value="<?php echo $televisor->getPrecio(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> 
            <br>
            <span for="consumoEnerg" class="input-group-text" id="inputGroup-sizing-default">Consumo Energ</span>
            <input type="number" name="consumoEnerg" value="<?php echo $televisor->getConsumoEnerg(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <br>
            <span for="tamano" class="input-group-text" id="inputGroup-sizing-default">Tamano</span>
            <input type="number" name="tamano" value="<?php echo $televisor->getTamano(); ?>" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
    <h2>Lista De Televisores Smart</h2>
    <table>
        <thead>
            <tr>
                <th># Referencia</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Consumo Energetico</th>
                <th>Tamaño</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($televisores as $id => $televisor) { ?> 
            <tr>
                <td><?php echo $televisor->getReferencia();?></td>
                <td><?php echo $televisor->getCantidadStock();?></td>
                <td><?php echo $televisor->getPrecio();?></td>
                <td><?php echo $televisor->getConsumoEnerg();?></td>
                <td><?php echo $televisor->getTamano();?></td>
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