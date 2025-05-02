<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de contraseñas</title>
</head>
<body>
    <?php
    $contraseña = "abcaAa123a";
    $contador = 4;

    function Validar_contraseña ($contraseña) {
        $contador = 4;
        if (strlen($contraseña) < 8) {
            echo("La longitud minima de caracteres es de 8 <br>");
            $contador = $contador - 1;
        }

        if(!preg_match('/[0-9]/', $contraseña)){
            echo("La contraseña debe contener un número <br>");
            $contador = $contador - 1;
        }

        if(!preg_match('/[\W_]/', $contraseña)) {
            echo("La contraseña debe contener caracteres especiales <br>");
            $contador = $contador - 1;
        }

        if(!preg_match('/[A-Z]/', $contraseña)) {
            echo("La contraseña debe contener una mayuscula <br>");
            $contador = $contador - 1;
        }

        if($contador == 4){
            echo("La contraseña válida es: " . $contraseña . "<br>");
        }
        return $contador;
    }
  
    function Fuerza_contraseña($contador) {
        if($contador == 4){
            echo("El nivel de la contraseña es fuerte");
        }

        elseif($contador == 3){
            echo("El nivel de la contraseña es media");
        }

        elseif($contador == 2){
            echo("El nivel de la contraseña es debil");
        }

        else{
            echo("La contraseña no es suficientemente fuerte");
        }
    }
    $contador = Validar_contraseña($contraseña);
    Fuerza_contraseña($contador);
?>
</body>
</html>