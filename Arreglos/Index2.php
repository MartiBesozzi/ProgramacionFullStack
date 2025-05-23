<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles + Arrays</title>
</head>
<body>
    <?php

$frutas = ["Manzana", "Banana", "Naranja", "Uva"];

// Recorrido con for (cuando conoces el tamaño)
for($i = 0; $i < count($frutas); $i++) {
    echo "Fruta $i: " . $frutas[$i] . "
";
}

echo("<br>");

Foreach($frutas as $fruta) {
    echo "Fruta: $fruta<br>";
}

echo("<br>");

// Con índice:
foreach($frutas as $indice => $fruta) {
    echo "Fruta $indice: $fruta<br>";
}

echo("<br>");

$i = 0;
while($i < count($frutas)) {
    echo "Fruta $i: " . $frutas[$i] . "
";
    $i++;
}

$productos = [
    ["id" => 1, "nombre" => "Laptop", "precio" => 899.99],
    ["id" => 2, "nombre" => "Teléfono", "precio" => 599.50],
    ["id" => 3, "nombre" => "Tablet", "precio" => 349.99]
];
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Precio con IVA</th>
    </tr>
    
    <?php foreach($productos as $producto): ?>
    <tr>
        <td><?= $producto['id'] ?></td>
        <td><?= $producto['nombre'] ?></td>
        <td>$<?= number_format($producto['precio'], 2) ?></td>
        <td>$<?= number_format($producto['precio'] * 1.12, 2) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>