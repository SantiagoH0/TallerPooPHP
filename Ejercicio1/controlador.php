<?php

    require 'Usuario.php';

    $usuarios = array(
        new Usuario("Lorena", "Tamayo", 20, "Mujer", "No"),
        new Usuario("Santiago", "Hernandez", 21, "Hombre", "No")
    );

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['crear'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $genero = $_POST['genero'];
            $hijoUnico = $_POST['hijoUnico'];

            $usuario = new Usuario($nombre, $apellido, $edad, $genero, $hijoUnico);

            $usuarios[] = $usuario;
        }

        if(isset($_POST['actualizar'])){
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $genero = $_POST['genero'];
            $hijoUnico = $_POST['hijoUnico'];
    
            $usuario = $usuarios[$id];
    
            $usuario->setNombre($nombre);
            $usuario->setApellido($apellido);
            $usuario->setEdad($edad);
            $usuario->setGenero($genero);
            $usuario->setHijoUnico($hijoUnico);
    
            $usuarios[$id] = $usuario;
        }

        if(isset($_POST['eliminar'])){
            $id = $_POST['id'];
            array_splice($usuarios, $id, 1);
        }
    }
?>