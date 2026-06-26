<
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sorteio de Número</title>
</head>
<body>

<form method="post">
    Informe o número máximo:
    <input type="number" name="numero" required>
    <input type="submit" value="Sortear">
</form>

<?php
if (isset($_POST["numero"])) {

    $numero = $_POST["numero"];
    $sorteio = rand(1, $numero);

    echo "Número informado: " . $numero . "<br>";
    echo "Número sorteado: " . $sorteio;

}
?>

</body>
</html>