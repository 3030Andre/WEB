<?php
session_start();

$usuarioCorreto = "admin";
$senhaCorreta = "1234";

if (isset($_POST["entrar"])) {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == $usuarioCorreto && $senha == $senhaCorreta) {

        $_SESSION["usuario"] = $usuario;
        header("Location: principal.php");
        exit();

    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php
if(isset($erro)){
    echo "<p style='color:red;'>$erro</p>";
}
?>

<form method="POST">

<label>Usuário:</label><br>
<input type="text" name="usuario" required><br><br>

<label>Senha:</label><br>
<input type="password" name="senha" required><br><br>

<input type="submit" name="entrar" value="Entrar">

</form>

</body>
</html>