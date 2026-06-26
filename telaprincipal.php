<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Página Principal</title>
</head>
<body>

<h2>Bem-vindo!</h2>

<p>Usuário <b><?php echo $_SESSION["usuario"]; ?></b> está logado.</p>

<a href="logout.php">
    <button>Sair</button>
</a>

</body>
</html>