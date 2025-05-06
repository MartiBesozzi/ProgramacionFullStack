<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir numeros del 1 al 100</title>
</head>
<body>
    <?php

    for ($numero = 1; $numero <= 100; $numero++){
        echo ("Numero: $numero <br>" );
    }


    echo("<hr>");

    for ($numero = 1; $numero <= 10; $numero++){
        $multiplicacion = $numero * 5;
        echo ("Resultado: $multiplicacion <br>" );
    }

    echo("<hr>");

    $suma = 0;

    for ($numero = 1; $numero <= 50; $numero++){
        $pares = $numero * 2;
        $resultado = $suma += $pares;
        
    }
    echo($resultado);  
?>
</body>
</html>