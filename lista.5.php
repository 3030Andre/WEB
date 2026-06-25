<
<form method="post">
    Início: <input type="number" name="n1"><br>
    Fim: <input type="number" name="n2"><br>
    <input type="submit">
</form>

<?php

if(isset($_POST['n1'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    echo rand($n1,$n2);
}

?>