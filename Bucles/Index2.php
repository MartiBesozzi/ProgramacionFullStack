<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle Foreach</title>
</head>
<body>
    <?php   

$nombres = ["Ana", "Luis", "Pedro", "María"];

foreach ($nombres as $nombre) {
    echo("Nombres: $nombre <br>");
}

$productos = [ "Pan" => 40, "Leche" => 60, "Queso" => 120 ];

foreach ($productos as $producto => $precio) {
    echo("Producto: $producto <br> Precio: $precio <br>");
}

 
?>
</body>
</html>