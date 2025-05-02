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
            echo("Alerta ola de calor ");
        }

        elseif($humedad > 60){
            echo("La humedad es bastante alta ");
        }

        elseif($velocidad_viento > 30){
            echo("El viento es bastante fuerte ");

        }

        elseif($precipitacion > 112){
            echo("Las precipitaciones son muy altas ");
        }

        echo("La temperatura es: ". $temperatura. "°"); <br>
        echo("La humedad es: ". $humedad. "%");
        echo("La velocidad del viento es:". $velocidad_viento. "km/h");
        echo("Las precipitaciones son:". $precipitacion. "ml");
    }
    Alerta_metereologica($temperatura, $humedad, $velocidad_viento, $precipitacion);

    ?>
</body>
</html>