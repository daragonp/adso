<?php 
    require_once "../dao/conexion.php";

    Class UserModel extends Conectar{
        private $table;
        
        function __construct()
        {
            parent::__construct();
            $this->table = 'user';
        }

        public function selectData(){
            $consulta = $this->connect->query("SELECT * FROM $this->table");
            $resultado = $consulta->fetchAll();
            return $resultado;
        }

        public function searchData($data, $view=null){
            if($view = 'index'){
                $consulta = $this->connect->query("SELECT * FROM $this->table WHERE username = '$data' OR userlastname = '$data'");
            }else{
                $consulta = $this->connect->query("SELECT * FROM $this->table WHERE id = '$data'");
            }
            $resultado = $consulta->fetchAll();
            return $resultado;
        }

        public function createUser($data){
            $consulta = $this->connect->query("INSERT INTO $this->table (userid, username, userlastname, userpassword, userbirthdate, usertypedocu) VALUES( :userid, :username, :userlastname, :userpassword, :userbirthdate, :usertypedocu");
            $resultado = $this->connect->prepare($consulta)->execute(['userid'=>$data['userid'], 'username'=>$data['username'], 'userlastname'=>$data['userlastname'], 'userpassword'=>$data['userpassword'], 'userbirthdate'=>$data['userbirthdate'], 'usertypedocu'=>$data['usertypedocu']]);
            return $resultado;
        }
    }

?>