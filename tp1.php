<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Trabajo Práctico 1</h1> <br>
<?php
/**Imprima por pantalla: “Hola mundo” */
$Hm = "Hola mundo";
echo $Hm."<br>". "<br>";


/**Crear dos variables enteras y mostrar por pantalla, la suma, 
 * la resta, la multiplicación, la división
entera y el resto de la división entera */
$Num1 = 2;
$Num2 = 3;
$Suma = $Num1 + $Num2;
$Resta = $Num1 - $Num2;
$Mult = $Num1 * $Num2;
$Div = $Num1 / $Num2;
$Resto = $Num1 % $Num2;


echo "El resultado final de la suma es: ". $Suma ."<br>";
echo "El resultado final de la resta es: ". $Resta."<br>";
echo "El resultado final de la multiplicación es: ". $Mult."<br>";
echo "El resultado final de la división es: ". $Div."<br>";
echo "El resultado final del resto es: ". $Resto."<br>"."<br>";


/**Realizar la transformación de grados Celsius a Fahrenheit, 
 * para el valor 20°C y luego lo imprima por
pantalla. */

$Temp = 20;
$Fa = $Temp * 1.8 + 32;

echo "La temperatura en Fahrenheit es: ". $Fa."<br>"."<br>";

/**Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm. */

//a)
$Base = 18;
$Altura = 12;
$PerRec = $Base * 2 + $Altura * 2;
$AreaPer = $Base * $Altura;

echo "El perímetro del rectángulo es: ". $PerRec."<br>"; 
echo "El perímetro del rectángulo es: ". $AreaPer."<br>". "<br>"; 

//b)
$Radio = 30;
$PerCir = 3.1416 * 30 * 2;
$AreaCir = 3.1416 * 30 * 30;

echo "El perímetro del círculo es: ". $PerCir. "<br>";
echo "El área del círculo es: ". $AreaCir. "<br>";
?>
</body>
</html>