<?php

    class Electrodomesticos{
        private $referencia;
        private $cantidadStock;

        public function __construct($referencia, $cantidadStock)
        {
            $this->referencia = $referencia;
            $this->cantidadStock = $cantidadStock;
        }

        

        /**
         * Get the value of referencia
         */
        public function getReferencia()
        {
                return $this->referencia;
        }

        /**
         * Set the value of referencia
         */
        public function setReferencia($referencia): self
        {
                $this->referencia = $referencia;

                return $this;
        }

        /**
         * Get the value of cantidadStock
         */
        public function getCantidadStock()
        {
                return $this->cantidadStock;
        }

        /**
         * Set the value of cantidadStock
         */
        public function setCantidadStock($cantidadStock): self
        {
                $this->cantidadStock = $cantidadStock;

                return $this;
        }
    }

    class SonidoDigital extends Electrodomesticos{
        private $precio;
        private $pesoKg;

        public function __construct($referencia, $cantidadStock, $precio, $pesoKg)
        {
            parent::__construct($referencia, $cantidadStock);
            
            $this->precio = $precio;
            $this->pesoKg = $pesoKg;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($precio): self {
            $this->precio = $precio;

            return $this;
        }

        public function getPesoKg(){
            return $this->pesoKg;
        }

        public function setPesoKg($pesoKg){
            $this->pesoKg = $pesoKg;

            return $this;
        }

    }

    class TelevisorSmart extends Electrodomesticos{
        private $precio;
        private $consumoEnerg;
        private $tamano;

        public function __construct($referencia,$cantidadStock,$precio, $consumoEnerg, $tamano)
        {
            parent:: __construct($referencia,$cantidadStock);

            $this->precio = $precio;
            $this->consumoEnerg = $consumoEnerg;
            $this->tamano = $tamano;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function setPrecio($precio): self {
            $this->precio = $precio;

            return $this;
        }

        public function getConsumoEnerg(){
            return $this->consumoEnerg;
        }

        public function setConsumoEnerg($consumoEnerg){
            $this->consumoEnerg = $consumoEnerg;

            return $this;
        }

        public function getTamano(){
            return $this->tamano;
        }

        public function setTamano($tamano){
            $this->tamano = $tamano;

            return $this;
        }
    }


?>