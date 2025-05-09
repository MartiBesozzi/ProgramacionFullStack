<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php

$numero = 10;

while ($numero > 0) {
    echo("Numero: $numero <br>");
    $numero--;

}

echo("<hr>");

$valor = 0;

while ($valor < 48){
    $multiplicacion = $valor += 3;
    echo("Numero: $multiplicacion <br>");

}

echo("<hr>");

$num = 0;
$suma = 0;

while ($num < 10) {
    $num++;
    $suma += $num;

}
echo $suma;  

?>
</body>
</html>