<h3>Ejercicio 1</h3>
<?php
$my_int = 111;
echo $my_int . "<br/>";
$my_double = 11.11;
echo $my_double . "<br/>";
$my_string = "Esto es un string";
echo $my_string . "<br/>";
$my_boolean = true;
echo $my_boolean . "<br/>"; 

const NAME = "Cristina";
echo "<h1>" . NAME . "</h1>";
?>

<h3>Ejercicio 2</h3>
<?php
$saludo = "Hello, World!";
echo $saludo . "<br/>";

echo strtoupper($saludo) . "<br/>";
echo strlen($saludo) . "<br/>";
echo strrev($saludo) . "<br/>";

$texto = "Aquest és el curs de PHP";
echo $saludo . "\n" . $texto;
?>

<h3>Ejercicio 3</h3>
<?php
$X = 2;
$Y = 4;
$N = 5.5;
$M = 9.3;

echo "El valor de X es $X y el de Y es $Y." . "<br/>";
echo "X + Y = ". ($X+$Y) . "<br/>";
echo "X - Y = ". ($X-$Y) . "<br/>";
echo "X * Y = ". ($X*$Y) . "<br/>";
echo "X % Y = ". ($X%$Y) . "<br/>";

echo "El valor de N es $N y el de M es $M." . "<br/>";
echo "N + M = ". ($N+$M) . "<br/>";
echo "N - M = ". ($N-$M) . "<br/>";
echo "N * M = ". ($N*$M) . "<br/>";
echo "N % M = ". ($N%$M) . "<br/>";

echo "El doble de cada variable es: ". ($X*$X) . "\n" . ($Y*$Y) . "\n" . ($N*$N) . "\n" . ($M*$M) . "<br/>";
echo "La suma de todas las variable es: ". ($X+$Y+$N+$M) . "<br/>";
echo "El producto de todas las variable es: ". ($X*$Y*$N*$M) . "<br/>";

function calculadora($num1, $num2, $op) {
    $resultado = 0;
    if ($op == '+') {
        $resultado = $num1 + $num2;
    } elseif ($op == '-') {
        $resultado = $num1 - $num2;
    } elseif ($op == '*') {
        $resultado = $num1 * $num2;
    } elseif ($op == '/') {
        $resultado = $num1 / $num2;
    } else {
        echo "operador no válido";
    }
    return $resultado;
}

$num1 = 2;
$num2 = 4;
$op = '/';
echo calculadora($num1, $num2, $op) . "\n";
?>

<h3>Ejercicio 4</h3>
<?php
function contar($num, $paso) {
    for ($i = 0; $i <= $num; $i += $paso) {
        if ($num == null) {
            $num = 10;
            echo "El valor de i es: $i <br/>";
        } else {
            echo "El valor de i es: $i <br/>";
        }    
    }
}
$num = 20; 
$paso = 1; 
contar($num, $paso); 
contar(null, 2); 
?>

<h3>Ejercicio 5</h3>
<?php
function grado($nota) {
    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45 && $nota <= 59) {
        return "Segunda División";
    } elseif ($nota >= 33 && $nota <= 44) {
        return "Tercera División";
    } elseif ($nota <= 33 && $nota >= 0) {
        return "Reprobado";
    } else {
        return "Nota no válida";
    }
}
$nota = 50; 
echo "La nota $nota% corresponde a: " . grado($nota) . "<br/>";
grado(70);
echo "La nota 70% corresponde a: " . grado(70) . "<br/>";
echo "La nota 45% corresponde a: " . grado(45) . "<br/>";
echo "La nota 33% corresponde a: " . grado(33) . "<br/>";
echo "La nota -20% corresponde a: " . grado(-20) . "<br/>";
?>

<h3>Ejercicio 6</h3>
<?php
function isBitten() {
    return rand(0, 1) === 1; 
}

echo "¿El perro ha mordido? " . (isBitten() ? "Sí" : "No") . "<br/>";
?>
