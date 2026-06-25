<html>
<body>

<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);

echo "Nome: ".$nome."<br>";
echo "Email: ".$email."<br>";
echo "Peso: ".$peso."<br>";
echo "Altura: ".$altura."<br>";
echo "IMC: ".number_format($imc,2);

?>

</body>
</html>