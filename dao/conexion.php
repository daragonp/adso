<?php 
    define('HOST', 'localhost');
    define('USER', 'bdadso');
    define('PASSWORD', 'BaseDatosADSO7896*');
    define('DBNAME', 'adso');

    class Conectar{

        protected $connect;

        function __construct()
        {
            $this->ConectarBD;
        }

        private function ConectarBD(){
            try{
                $this->connect = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);                
            }catch(PDOException $e){
                echo "Ha habido un error al intentar conectarse con la base de datos".$e->getMessage();
                die();
            }
        }
    }
?>