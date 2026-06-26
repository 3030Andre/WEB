<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- crie um site em PHP onde o usuário informe dois númweros para definir um intervalo salvos na sessão. Exiba cada número dentro de uma tag span com uma classe CSSq especifica por você. -->
   <?php
        
    session_start();
     
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Armazenar os números na sessão
        $_SESSION['numero1'] = $numero1;
        $_SESSION['numero2'] = $numero2;

        // Exibir os números dentro de tags span com classes CSS
        echo "<span class='numero1'>Número 1: " . htmlspecialchars($numero1) . "</span><br>";
        echo "<span class='numero2'>Número 2: " . htmlspecialchars($numero2) . "</span><br>";
    } 
    // Exibir os números armazenados na sessão, se existirem
    if (isset($_SESSION['numero1']) && isset($_SESSION['numero2'])) {
        echo "<span class='numero1'>Número 1 (da sessão): " . htmlspecialchars($_SESSION['numero1']) . "</span><br>";
        echo "<span class='numero2'>Número 2 (da sessão): " . htmlspecialchars($_SESSION['numero2']) . "</span><br>";
    }


    ?>
   ?>
    <form method="post">
        <input type="number" name="numero1" placeholder="Digite o primeiro número">
        <input type="number" name="numero2" placeholder="Digite o segundo número">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


