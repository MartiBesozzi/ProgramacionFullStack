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
    ["nombre" => "Peñarol", "escudo" => "penarol.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Nacional", "escudo" => "nacional.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Defensor Sporting", "escudo" => "defensorsporting.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Montevideo City Torque", "escudo" => "montevideo.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Boston River", "escudo" => "bostonriver.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Cerro", "escudo" => "cerro.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Cerro Largo", "escudo" => "cerrolargo.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Danubio", "escudo" => "danubio.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Plaza Colonia", "escudo" => "plazacolonia.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Progreso", "escudo" => "progreso.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Juventud", "escudo" => "juventud.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Racing", "escudo" => "racing.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Liverpool", "escudo" => "Liverpool.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "River Plate", "escudo" => "riverplate.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Miramar Misiones", "escudo" => "miramarmisiones.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0],

    ["nombre" => "Wanderers", "escudo" => "wanderers.png", "puntos" => 0, "partidos_ganados" => 0, "partidos_empatados" => 0, "partidos_perdidos" => 0, "goles_a_favor" => 0, "goles_en_contra" => 0, "diferencia" => 0]   
];
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

