<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>aleatorio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    
    <?php
    $contador = 0;
    for ($i=6; $i >= 0; $i = $i--) { 
        if ($i % 2 == 0) {
        print "<p>$i</p>";
        } else {
            $contador++;
        }
    }
    echo "hay $contador impares entre 6 y 0";

    $hora = date("H");
    if ($hora >= 8 && $hora <= 12) {
        echo "Buenas tardes";
    } else if ($hora > 12 && $hora <= 20){
        echo "Buenas tardes";
    } else {
        echo "Buenas noches";
    }


    echo "<br/>";

    $numero = rand (1,100);
    $digitos = strlen ($numero);
    echo "$numero tiene digitos"


    
    ?>





</body>


</html>