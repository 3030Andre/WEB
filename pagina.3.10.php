<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
        margin: 20px;
}
P {

}
    </style>
</head>
<body>
    <h1> Recebendo dados via POST </h1>
    <?php
    //vamos verificar se a variável nome, email, alrura , e calcula o IMC, se não existir vamos redirecionar para a pagina.2.10.php
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['peso']) && isset($_POST['altura'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        //calcula o IMC
        $imc = $peso / ($altura * $altura);

        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Peso: " . htmlspecialchars($peso) . "<br>";
        echo "Altura: " . htmlspecialchars($altura) . "<br>";
        echo "IMC: " . number_format($imc, 2) . "<br>";
    } else {
        echo "Não foi possível receber os dados via POST";
        header("Location: pagina.2.10.php?error=faltando_dados");
    }
</body>
</html>