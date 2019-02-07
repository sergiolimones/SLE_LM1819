<head>
    <title>Tablas de multiplicar con while</title>
</head>
<body>
    <center>
            <h1>Programa de las tablas de multiplicar con el ciclo while<br>
        <?php
            $ciclo1=1;
            while($ciclo1<=10)
            {
            echo "<table><tr><td>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
            $ciclo2=1;
            while($ciclo2<=10)
            {
            $mult=$ciclo1*$ciclo2;
            echo "<tr><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
            $ciclo2++;
            }
            echo "</table>";
            $ciclo1++;
            }
        ?>
        </h1>
    </center>
</body>