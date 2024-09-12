<?php 
// aritmeticos 
$x = 10;
$y = 5;
    echo "Suma: " . ($x+ $y) . "\n";
    echo "Resta: " . ($x - $y) . "\n";
    echo "Multiplicación: " . ($x * $y) . "\n";
    echo "División: " . ($x / $y) . "\n";
    echo "Módulo: " . ($x % $y) . "\n";
    echo "Exponenciacion:" . ($x ** $y) ."\n"; // Introducido en php 5.6
// de incremento y decremento
    echo "Pre-incremento: ". (++$x). "\n";
    echo "Post-incremento: ". ($x++). "\n";
    echo "pre-decremento: " . (--$x). "\n";
    echo "post-decremento: " . ($x--). "\n";
 // asignacion 
$z = 4;
    echo "asignacion (+=):" . $x ."\n";
// comparacion  // Ternario (?)(puede tomar 3 valores para compararlos)  condición expresión_si_verdadero : expresión_si_falso;
    echo "Igual: " . ($x == $y ? 'true' : 'false') . "\n";
    echo "Desigual: " . ($x != $y ? 'true' : 'false') . "\n";
    echo "Mayor que: " . ($x > $y ? 'true' : 'false') . "\n";
    echo "Menor que: " . ($x < $y ? 'true' : 'false') . "\n";
    echo "menor o igual que:" . ($x <= $y ? 'true' : 'false') . "\n";
    echo "mayor o igual que:" . ($x >= $y ? 'true' : 'false') . "\n";
// identidad 
    echo "Idéntico: " . ($x === 10 ? 'true' : 'false') . "\n";
    echo "No idéntico: " . ($x !== '10' ? 'true' : 'false') . "\n";
    // logicos
$verdadero = true;
$falso = false;
    echo "AND lógico: " . ($verdadero && $falso ? 'true' : 'false') . "\n";
    echo "OR lógico: " . ($verdadero || $falso ? 'true' : 'false') . "\n";
    echo "NOT lógico: " . (!$verdadero ? 'true' : 'false') . "\n";
// bits
    echo "AND de bits: " . ($x & $y) . "\n";
    echo "OR de bits: " . ($x | $y) . "\n";
    echo "XOR de bits: " . ($x ^ $y) . "\n";
    echo "Desplazamiento a la izquierda: " . ($x << 1) . "\n";
    echo "Desplazamiento a la derecha: " . ($x >> 1) . "\n";
// para arrays
$array = [1, 2, 3, 4, 5];
    echo "Pertenencia (in_array): " . (in_array(3, $array) ? 'true' : 'false') . "\n";
// para strings
$a = "Hello ";
$b = $a . "World!";
    echo "$b" . "\n";
// estructuras de control // condicionales
$c = 10;
$d = 5;
if ($c > $d) {
    echo "$c es mayor que $d\n";
} else {
    echo "$c no es mayor que $d\n";
}
//iterativas 
for ($i = 0; $i <= 5; $i++) {
    echo "Prueba: $i\n";
}
$i = 1;
while ($i <= 10) {
    echo ($i++) ."\n";
}
//exepciones 
try {
    if ($c == 0) {
        throw new Exception("División por cero");
    } else {
        echo "División: " . ($c / $d) . "\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
/* DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3 */

    for ($i = 10; $i <= 55; $i++){
        if (($i % 2) !==0) {
            continue;
        } 
        if ($i === 16) {
            continue;
        }
        if (($i % 3) === 0){
            continue;
        }
    echo $i  .  '';
    }
