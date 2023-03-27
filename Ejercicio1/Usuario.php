<?php

    class Usuario{
        private $nombre;
        private $apellido;
        private $edad;
        private $genero;
        private $hijoUnico;

        public function __construct($nombre, $apellido, $edad, $genero, $hijoUnico){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this->genero = $genero;
            $this->hijoUnico = $hijoUnico;
        }

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         */
        public function setNombre($nombre): self
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of edad
         */
        public function getEdad()
        {
                return $this->edad;
        }

        /**
         * Set the value of edad
         */
        public function setEdad($edad): self
        {
                $this->edad = $edad;

                return $this;
        }

        /**
         * Get the value of genero
         */
        public function getGenero()
        {
                return $this->genero;
        }

        /**
         * Set the value of genero
         */
        public function setGenero($genero): self
        {
                $this->genero = $genero;

                return $this;
        }

        public function getHijoUnico(){
                return $this->hijoUnico;
        }

        public function setHijoUnico($hijoUnico): self
        {     
                $this->hijoUnico = $hijoUnico;

                return $this;
        } 

        public function getApellido(){
                
                return $this->apellido;
        }

        public function setApellido($apellido){

                $this->apellido = $apellido;

                return $this;
        }

        public function requisito(){
                if($this->edad > 17 && $this->edad < 35 && $this->genero == "Hombre" && $this->hijoUnico == "No"){
                        $mensaje = "Cumple";
                }else{
                        $mensaje = "No cumple";
                }

                return $mensaje;
        }
}
    
?>