<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
<?php  
    do {
        $dado = rand(1, 6);
        echo "Salió: $dado 
    ";
    }
    while ($dado != 5);

?>




</body>
</html>