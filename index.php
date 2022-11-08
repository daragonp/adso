<?php

$vector = array("Identificación"=>1, 
                "Nombre"=>"Pepito Pérez", 
                "Fecha de nacimiento"=>'2008-12-14', 
                "Edad"=>13, 
                "Enfermedad"=>False, 
                "Dirección"=>'Cra 7 E # 9 - 56'
);
$vector2[] = array_merge($vector, ["Horario"=>'Lunes a viernes: 8:00am - 5:00pm']);
$vector['Nombre']='Juana Pérez';
echo $vector['Nombre'];
//echo $vector2[6];
//echo count($vector);
//$vector[0] = 1234;
//echo $vector [0];
//unset($vector[1]);
print_r($vector);
//echo $vector[0];
/*echo "Identificación: ".$vector[0]."<br>";
echo "Nombre: ".$vector[1]."<br>";
echo "Fecha de nacimiento: ".$vector[2]."<br>";
echo "Edad: ".$vector[3]."<br>";
echo "¿Tiene alguna enfermedad?: ";
if ($vector[4]==0){
    echo "No";
}else{
    echo "Sí";
}

echo "<br>Dirección: ".$vector[5]."<br>"; */
?>