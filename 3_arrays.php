<h3>Ejercicio 1</h3>
<?php
$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>

<h3>Ejercicio 2</h3>
<?php   
$X = array(10, 20, 30, 40, 50, 60);
echo "Medida inicial del array: " . count($X) . "<br>";
unset($X[2]); 
$X = array_values($X);
echo "Medida final del array: " . count($X) . "<br>";
?>

<h3>Ejercicio 3</h3>
<?php   
function contieneCaracter($array, $caracter) {
    foreach ($array as $palabra) {
        if (strpos(strtolower($palabra), strtolower($caracter)) === false) {
            return false;
        }
    }
    return true;
}
$palabras = ["hola", "Php", "Html"];
$caracter = "h";
$resultado = contieneCaracter($palabras, $caracter) ? "true" : "false";
echo "¿Todas las palabras contienen el carácter '$caracter'? $resultado<br>";
?>

<h3>Ejercicio 4</h3>
<?php   
$asociativo = [
    "nombre" => "Cristina",
    "edad" => 40,
    "email" => "mail@mail.com",
    "comida_favorita" => "Pizza"
];
foreach ($asociativo as $clave => $valor) {
    echo "$clave: $valor<br>";
}  
?>

