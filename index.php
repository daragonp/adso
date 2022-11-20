<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Programación orientada a objetos | PHP</title>
</head>
<body> 
    <h1 class="centrar">POO con PHP</h1>
    <div class="contenedor">
        <div class="caja">
            <?php
                class Persona{

                    private $nombre = "Juana La Araña";
                    public $id;
                    public $correo;
                    public $clave;
                    protected $fechadenacimiento;

                    public function getNombre(){
                        return $this->nombre;
                    }

                    public function getFecha(){
                        return $this->fechadenacimiento;
                    }

                    public function setFecha($fechadenacimiento){
                        $this->fechadenacimiento = $fechadenacimiento;
                    }

                    public function mostrarFecha(){
                        echo "Fecha de nacimiento: ".$this->getFecha;
                    }
                }

                class Empleado extends Persona{
                    protected $salario = 50000000;
                    public $ingreso = "1999-01-01";

                    public function getSalario(){
                        return $this->salario;
                    }

                    public function setSalario($salario){
                        $this->salario = $salario;
                    }

                    public function getIngreso(){
                        return $this->ingreso;
                    }

                    public function mostrarEmpleado(){
                        echo "Nombre: ".$this->getNombre()."<br>";
                        echo "Identificación: ".$this->id."<br>";
                        echo "Correo: ".$this->correo."<br>";
                        echo "Clave: ".$this->clave."<br>";
                        echo "Salario: ".$this->salario."<br>";
                        echo "Ingreso: ".$this->ingreso."<br>";
                        echo "Fecha de nacimiento: ".$this->fechadenacimiento."<br>";
                    }
                }

                $empleado1 = new Empleado();
                $empleado1->id=(1234567896);
                $empleado1->clave=("Miclave@589*");
                $empleado1->correo=("micorreo@correo.co");
                $empleado1->setFecha("1980-12-31");
                $empleado1->setSalario("8000000");
                $empleado1->mostrarEmpleado();

            ?>
        </div>
    </div>
</body>
</html>