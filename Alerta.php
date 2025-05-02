<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alertas meteorologicas</title>
</head>
<body>
    <?php
    $temperatura = 30;
    $humedad = 74;
    $velocidad_viento = 20;
    $precipitacion = 150;

    function Alerta_metereologica($temperatura, $humedad, $velocidad_viento, $precipitacion) {
        if($temperatura > 40) {
            echo("Alerta ola de calor <br>");
            
        }
        echo("<br>");

        if($humedad > 60){
            echo("Alerta la humedad es bastante alta <br>");
        }
        echo("<br>");

        if($velocidad_viento > 30){
            echo("Alerta el viento es bastante fuerte <br>");

        }
        echo("<br>");

        if($precipitacion > 112){
            echo("Alerta las medidas de precipitaciones son muy altas <br>");
        }
        echo("<br>");
        
        echo("La temperatura es: ". $temperatura. "°<br>");
        echo("La humedad es: ".$humedad. "%<br>");
        echo("La velocidad del viento es: ". $velocidad_viento. "km/h<br>");
        echo("Las precipitaciones son: ". $precipitacion. "ml<br>");
    }
    Alerta_metereologica($temperatura, $humedad, $velocidad_viento, $precipitacion);
    ?>

</body>
</html>