<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copa uruguaya</title>
</head>
<body>
<?php
   $equipos = [
    ["nombre" => "PeÃ±arol", "escudo" => "imagenes/penarol.png", "puntos" => 0, "partidos_ganados" => 6, "partidos_empatados" => 2, "partidos_perdidos" => 1, "goles_a_favor" => 17, "goles_en_contra" => 8, "diferencia" => 0],
 
    ["nombre" => "Nacional", "escudo" => "imagenes/nacional.png", "puntos" => 0, "partidos_ganados" => 5, "partidos_empatados" => 3, "partidos_perdidos" => 1, "goles_a_favor" => 15, "goles_en_contra" => 9, "diferencia" => 0],
 
    ["nombre" => "Defensor Sporting", "escudo" => "imagenes/defensorsporting.png", "puntos" => 0, "partidos_ganados" => 4, "partidos_empatados" => 2, "partidos_perdidos" => 3, "goles_a_favor" => 12, "goles_en_contra" => 11, "diferencia" => 0],
 
    ["nombre" => "Montevideo City Torque", "escudo" => "imagenes/montevideo.png", "puntos" => 0, "partidos_ganados" => 3, "partidos_empatados" => 3, "partidos_perdidos" => 3, "goles_a_favor" => 11, "goles_en_contra" => 12, "diferencia" => 0],
 
    ["nombre" => "Boston River", "escudo" => "imagenes/bostonriver.png", "puntos" => 0, "partidos_ganados" => 4, "partidos_empatados" => 1, "partidos_perdidos" => 4, "goles_a_favor" => 13, "goles_en_contra" => 13, "diferencia" => 0],
 
    ["nombre" => "Cerro", "escudo" => "imagenes/cerro.png", "puntos" => 0, "partidos_ganados" => 2, "partidos_empatados" => 4, "partidos_perdidos" => 3, "goles_a_favor" => 10, "goles_en_contra" => 12, "diferencia" => 0],
 
    ["nombre" => "Cerro Largo", "escudo" => "imagenes/cerrolargo.png", "puntos" => 0, "partidos_ganados" => 2, "partidos_empatados" => 3, "partidos_perdidos" => 4, "goles_a_favor" => 9, "goles_en_contra" => 14, "diferencia" => 0],
 
    ["nombre" => "Danubio", "escudo" => "imagenes/danubio.png", "puntos" => 0, "partidos_ganados" => 3, "partidos_empatados" => 2, "partidos_perdidos" => 4, "goles_a_favor" => 10, "goles_en_contra" => 13, "diferencia" => 0],
 
    ["nombre" => "Plaza Colonia", "escudo" => "imagenes/plazacolonia.png", "puntos" => 0, "partidos_ganados" => 1, "partidos_empatados" => 4, "partidos_perdidos" => 4, "goles_a_favor" => 7, "goles_en_contra" => 12, "diferencia" => 0],
 
    ["nombre" => "Progreso", "escudo" => "imagenes/progreso.png", "puntos" => 0, "partidos_ganados" => 2, "partidos_empatados" => 3, "partidos_perdidos" => 4, "goles_a_favor" => 8, "goles_en_contra" => 13, "diferencia" => 0],
 
    ["nombre" => "Juventud", "escudo" => "imagenes/juventud.png", "puntos" => 0, "partidos_ganados" => 3, "partidos_empatados" => 1, "partidos_perdidos" => 5, "goles_a_favor" => 10, "goles_en_contra" => 16, "diferencia" => 0],
 
    ["nombre" => "Racing", "escudo" => "imagenes/racing.png", "puntos" => 0, "partidos_ganados" => 2, "partidos_empatados" => 2, "partidos_perdidos" => 5, "goles_a_favor" => 9, "goles_en_contra" => 15, "diferencia" => 0],
 
    ["nombre" => "Liverpool", "escudo" => "imagenes/Liverpool.png", "puntos" => 0, "partidos_ganados" => 5, "partidos_empatados" => 2, "partidos_perdidos" => 2, "goles_a_favor" => 16, "goles_en_contra" => 10, "diferencia" => 0],
 
    ["nombre" => "River Plate", "escudo" => "imagenes/riverplate.png", "puntos" => 0, "partidos_ganados" => 3, "partidos_empatados" => 3, "partidos_perdidos" => 3, "goles_a_favor" => 11, "goles_en_contra" => 11, "diferencia" => 0],
 
    ["nombre" => "Miramar Misiones", "escudo" => "imagenes/miramarmisiones.png", "puntos" => 0, "partidos_ganados" => 1, "partidos_empatados" => 3, "partidos_perdidos" => 5, "goles_a_favor" => 6, "goles_en_contra" => 14, "diferencia" => 0],
 
    ["nombre" => "Wanderers", "escudo" => "imagenes/wanderers.png", "puntos" => 0, "partidos_ganados" => 2, "partidos_empatados" => 3, "partidos_perdidos" => 4, "goles_a_favor" => 9, "goles_en_contra" => 13, "diferencia" => 0]
    ];

foreach ($equipos as &$equipo) {
    $equipo["puntos"] = ($equipo["partidos_ganados"] * 3) + ($equipo["partidos_empatados"]);
    $equipo["diferencia"] = $equipo["goles_a_favor"] - $equipo["goles_en_contra"];
}
unset($equipo);

?>

<table border="1">
        <tr>
            <th>Nombres</th>
            <th>PTS</th>
            <th>Part. Ganados</th>
            <th>Part. Empatados</th>
            <th>Part. Perdidos</th>
            <th>Part. Goles a favor</th>
            <th>Part. Goles en contra</th>
            <th>Diferencia</th>
        </tr>
 
        <?php foreach($equipos as $equipo): ?>
        <tr>
            <td>
            <?= $equipo["nombre"] ?>
            <img src="<?= $equipo["escudo"] ?>" alt="Escudo <?= $equipo["nombre"] ?>" width="30">
            </td>
            <td><?= $equipo["puntos"] ?></td>
            <td><?= $equipo["partidos_ganados"] ?></td>
            <td><?= $equipo["partidos_empatados"] ?></td>
            <td><?= $equipo["partidos_perdidos"] ?></td>
            <td><?= $equipo["goles_a_favor"] ?></td>
            <td><?= $equipo["goles_en_contra"] ?></td>
            <td><?= $equipo["diferencia"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

