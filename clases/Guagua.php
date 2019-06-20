<?php
        
    class Guagua{

        private $nombre;
        private $color;
        private $capacidad;
        
        function __construct($nombre,$color,$capacidad){
            $this->nombre = $nombre;
            $this->color = $color;
            $this->capacidad = $capacidad;
        }
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function setColor($color){
            $this->color = $color;
        }
        
        public function getColor(){
            return $this->color;
        }
        
        public function setCapacidad($capacidad){
            $this->capacidad = $capacidad;
        }
        
        public function getCapacidad(){
            return $this->capacidad;
        }
        
        public function toString(){
            $resultado = 'Nombre: '.$this->nombre;
            $resultado .= '<br/>';
            $resultado .= 'Color: '.$this->color;
            $resultado .= '<br/>';
            $resultado .= 'Capacidad: '.$this->capacidad;
            $resultado .= '<br/>';
            return $resultado;
        }

        public function darDeAlta(){
            $consulta = "INSERT INTO guagua(nombre,color,capacidad) VALUES 
                        ('$this->nombre','$this->color','$this->capacidad')";
            return $consulta;
        }

    }
        

?>