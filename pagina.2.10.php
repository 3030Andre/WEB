<html>
<body>
<h1>Recebendo dados via GET</h1>
<?php
//verificando se a variável $_GET['nome'] existe, se existir vamos pegar o valor dela e armazenar a variável $nome
if (isset($_GET['nome']) && isset($_GET['email'])) 
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    echo "Nome: ".$nome."<br>";
    echo "Email: ".$email."<br>";

else{
    echo "Não foi possível receber os dados via GET";
    header("Location: pagina1.10.php?error=faltando_dados");
}

?>


<form method="post" action="pagina.3.10.php">
    <!-- formulário para entrada de  nome  e-mail que vieram por get além de pedir peso e altura -->
    <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <input type="number" name="peso" placeholder="Digite seu peso">
    <input type="number" name="altura" placeholder="Digite sua altura">
    <input type="submit" value="Enviar">

</body>
</html>