<?php

    require 'Electrodomesticos.php';

    $sonidos = array(
        new SonidoDigital(2233, 30, 1500000, 30),
        new SonidoDigital(3322,20, 1000000,30)
    );

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['crear'])){
            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $pesoKG = $_POST['pesoKg'];

            $sonido = new SonidoDigital($referencia, $cantidadStock, $precio, $pesoKG);

            $sonidos[] = $sonido;
        }

        if(isset($_POST['actualizar'])) { 
            $id = $_POST['id'];

            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $pesoKg = $_POST['pesoKg'];

            $sonido= $sonidos[$id];

            $sonido->setReferencia($referencia);
            $sonido->setCantidadStock($cantidadStock);
            $sonido->setPrecio($precio);
            $sonido->setPesoKg($pesoKg);

            $sonidos[$id] = $sonido;

        }

        if(isset($_POST['eliminiar'])){
            
            $id = $_POST['id'];
            array_splice($sonidos, $id,1);
        }

        if(isset($_POST['confirmar'])){
            $id = intval($_POST['id']);
            $cantidadStock = $_POST['cantidadStock'];
            $cantidad = $_POST['cantidad'];
            $total = 0;

            $sonido = $sonidos[$id];

            if($cantidadStock > $cantidad){
                $total = $cantidadStock - $cantidad;

                $sonido->setCantidadStock($total);
                $sonidos[$id] = $sonido;

            }else{
                $mensaje = 'No hay suficientes unidades en el inventario';
                echo "<Script> alert('$mensaje');</Script>";
            }
        }

    }


?>