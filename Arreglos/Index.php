<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
<?php
$colores = ["rojo", "verde", "azul"];

// 1. Imprime el segundo color
echo "<br>";

// 2. Añade "amarillo" al arreglo
$colores[] = "amarillo";

echo $colores[1]; 
// 3. Imprime el número de colores
echo "<br>";
echo count($colores);
echo "<br>";

echo rsort($colores);
echo "<br>";

echo array_push($colores, "Naranja", "Violeta");
print_r($colores);
echo "<br>";

echo array_pop($colores);

$colores2 = ["Celeste", "Blanco", "Beige"];

echo array_merge($colores, $colores2);

?>


</body>
</html>