<?php 

    class Pelicula{
        private $titulo;
        private $anio;
        private $genero;

        public function __construct($titulo, $anio, $genero)
        {
            $this->titulo = $titulo;
            $this->anio = $anio;
            $this->genero = $genero;
        }

        

        /**
         * Get the value of titulo
         */
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         */
        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of anio
         */
        public function getAnio()
        {
                return $this->anio;
        }

        /**
         * Set the value of anio
         */
        public function setAnio($anio): self
        {
                $this->anio = $anio;

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
    }
?>