<html>
<body>

<form action="pagina3.php" method="post">

<input type="hidden" name="nome" value="<?php echo $_GET["nome"]; ?>">

<input type="hidden" name="email" value="<?php echo $_GET["email"]; ?>">

Peso:
<input type="number" name="peso">

<br><br>

Altura:
<input type="text" name="altura">

<br><br>

<input type="submit" value="Calcular">

</form>

</body>
</html>