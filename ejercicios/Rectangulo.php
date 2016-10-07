<?php
    // Crea una clase Rectangulo con dos atributos. base y altura.
    // Debe incluir los métodos:
    // - constructor.
    // - perimetro.
    // - superficie.
    // - añade también los getters y setters.

namespace Ejercicios

{
    class Rectangulo
    {
        private $_base;
        private $_altura;

        public function __construct($base = 1, $altura = 1)
        {
            $this->_base = $base;
            $this->_altura = $altura;
        }

        public function perimetro()
        {
            return $this->_base * 2 + $this->_altura * 2;
        }

        public function superficie()
        {
            return $this->_base * $this->_altura;
        }

        // GETTERS

        public function getBase()
        {
            return $this->_base;
        }

        public function getAltura()
        {
            return $this->_altura;
        }
        
        // SETTERS

        public function setBase($base)
        {
            $this->_base = $base;
        }

        public function setAltura($altura)
        {
            $this->_altura = $altura;
        }
    }
}
