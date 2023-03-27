<?php

    require 'Electrodomesticos.php';

    $televisores = array(
        new TelevisorSmart(2233, 30, 1500000, 20, 30),
        new TelevisorSmart(3322,20, 1000000,20, 30)
    );

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['crear'])){
            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $consumoEnerg = $_POST['consumoEnerg'];
            $tamano = $_POST['tamano'];

            $televisor = new TelevisorSmart($referencia, $cantidadStock, $precio, $consumoEnerg, $tamano);

            $televisores[] = $televisor;
        }

        if(isset($_POST['actualizar'])) { 
            $id = $_POST['id'];

            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $consumoEnerg = $_POST['consumoEnerg'];
            $tamano = $_POST['tamano'];

            $televisor= $televisores[$id];

            $televisor->setReferencia($referencia);
            $televisor->setCantidadStock($cantidadStock);
            $televisor->setPrecio($precio);
            $televisor->setConsumoEnerg($consumoEnerg);
            $televisor->setTamano($tamano);

            $televisores[$id] = $televisor;

        }

        if(isset($_POST['eliminiar'])){
            
            $id = $_POST['id'];
            array_splice($televisores, $id,1);
        }

        if(isset($_POST['confirmar'])){
            $id = intval($_POST['id']);
            $cantidadStock = $_POST['cantidadStock'];
            $cantidad = $_POST['cantidad'];
            $total = 0;

            $televisor = $televisores[$id];

            if($cantidadStock > $cantidad){
                $total = $cantidadStock - $cantidad;

                $televisor->setCantidadStock($total);
                $televisores[$id] = $televisor;

            }else{
                $mensaje = 'No hay suficientes unidades en el inventario';
                echo "<Script> alert('$mensaje');</Script>";
            }
        }

    }


?>