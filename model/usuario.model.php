<?php
    class Usuario{
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $foto;

        public function __get($atributo){
            return $this->$atributo;
        }
        public function __set($atributo, $valor){
             $this->$atributo = $valor;
        }
    }
?>