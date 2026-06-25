<form method="post">
    <input type="text" name="lista">
    <input type="submit">
</form>

<?php

if(isset($_POST['lista'])){

    $vetor = explode(",", $_POST['lista']);

    $soma = 0;

    foreach($vetor as $n){
        $soma += $n;
    }

    echo "Soma: ".$soma;
}

?>