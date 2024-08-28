
<?php
echo "<h2>Generador de Patrones</h2><br>";

echo "<h2>patrón de triángulo rectángulo usando asteriscos </h2><br>";

for ($i = 1; $i <= 5; $i++) {
    printAsterisks($i);
    echo "<br>";
}

function printAsterisks($n) {
    if ($n > 0) {
        printAsterisks($n - 1); 
        echo "*";               
    }
}
echo "<h3>números del 1 al 20, pero solo muestra los números impares.</h3><br>";
$n = 1;
while (true) {
    if ($n % 2 != 0) { 
        echo $n . "<br>"; 
    }
    
    if ($n == 20) { 
        break; 
    }
    
    $n++; 
}

echo "<h3>contador regresivo desde 10 hasta 1, pero salta el número 5..</h3><br>";
$n = 10; 
do {
    if ($n != 5) {
        echo $n . "<br>";
    }
    $n--; 

} while ($n >=1)
?>
    
							
