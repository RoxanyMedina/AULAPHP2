<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imersão PHP</title>
</head>
<body>
    <?php
    $dia_semana = 7;

    switch ($dia_semana) {
        case 1: echo "Domingo"; break;
        case 2: echo "Segunda-feira"; break;
        case 3: echo "Terça-feira"; break;
        case 4: echo "Quarta-feira"; break;
        case 5: echo "Quinta-feira"; break;
        case 6: echo "Sexta-feira"; break;
        case 7: echo "Sábado"; break;
        
    }

    
    //Turno de trabalho
    echo "<hr>";
    $turno = "M";
    switch ($turno) {
        case "M": echo "Bom dia!"; break;
        case "T": echo "Boa tarde!"; break;
        case "N": echo "Boa noite!"; break;

    }

    // Laços de repetição

    echo "<hr>";
    for ($i = 1; $i <= 100; $i++){
        echo $i . " ";
    }

    //Tabuada
    echo "<hr>";
    $numero = 9;
    for ($i = 1; $i <= 10; $i++){
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }


?>




</body>
</html>