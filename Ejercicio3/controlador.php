<?php
    require 'Pelicula.php';

    $peliculas = array(
        new Pelicula("Superman", 1990, "accion" )
    );

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['crear'])){
            $titulo = $_POST['titulo'];
            $anio = $_POST['anio'];
            $genero = $_POST['genero'];

            $pelicula = new Pelicula($titulo, $anio, $genero);

            $peliculas[] = $pelicula;
        }

        if(isset($_POST['actualizar'])){
            $id = $_POST['id'];
    
            $titulo = $_POST['titulo'];
            $anio = $_POST['anio'];
            $genero = $_POST['genero'];
    
            $pelicula = $peliculas[$id];
    
            $pelicula->setTitulo($titulo);
            $pelicula->setAnio($anio);
            $pelicula->setGenero($genero);
    
            $peliculas[$id] = $pelicula;
        }

        if(isset($_POST['eliminar'])){
            $id = $_POST['id'];

            array_splice($peliculas, $id, 1);
        }
    }

?>