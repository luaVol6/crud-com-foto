<?php
    class Conexao{
        private $host = 'localhost';
        private $dbname = 'php_com_mysql';       
        private $user = 'root';
        private $pass = '';

        public function conectar(){
            try{
                $conexão = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );
                return $conexão;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>
