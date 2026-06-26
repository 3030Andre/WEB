<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Palindromo</h1>
    <!-- Formulário para entrada de texto -->
  
    </form>
    <ul>
    <li>Texto: <?php</li>
    <li>Tamanho da String <?php echo $tamanho;</li>
    <li>Tamanho da String sem espaços internos: <?php echo strlen(str_replace(' ', '', $texto)); ?></li>
    <li>É um polindromo</li>
    <li>O numero de vogais </li>
    <li> O número de consoantes</li>
    </ul>
    <?php
    //vamos verificar se a variável $_GET['TEXTO'] existe, se existir vamos pegar o valor dela e armazenar a variável $texto
    if (isset($_GET['TEXTO'])) {
        $texto = $_GET['TEXTO'];
    }
    
</body>
</html>