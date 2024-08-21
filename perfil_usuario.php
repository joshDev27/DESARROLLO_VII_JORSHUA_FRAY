<?php
$nombre_completo = "Jorshua Fray";
$edad = 20;
$correo = "jorshua.fray@utp.ac.pa";
$telefono= 60115422;

define("OCUPACION", "¡Estudiante!");

printf("Hola! mi nombre es %s y mi edad es %d <br>",$nombre_completo,$edad);
echo "Actuamente me desempeño como ".OCUPACION. " puedes contactarme a traves de mi telefono $telefono o a mi correo $correo <br>";
print "Saludos!";
var_dump($nombre_completo,$edad,$correo,$telefono);
echo "<br>";


?>
