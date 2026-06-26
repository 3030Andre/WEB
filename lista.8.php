<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Soma de Números</title>
</head>
<body>

<h2>Somar Números</h2>

<form method="post">
    Digite os números separados por vírgula:
    <br><br>
    <input type="text" name="numeros">
    <br><br>
    <input type="submit" value="Somar">
</form>

<?php

if(isset($_POST["numeros"])){

    $numeros = $_POST["numeros"];

    $vetor = explode(",", $numeros);

    $soma = 0;

    for($i = 0; $i < count($vetor); $i++){
        $soma = $soma + $vetor[$i];
    }

    echo "<br>A soma é: " . $soma;
}

?>

</body>
</html>