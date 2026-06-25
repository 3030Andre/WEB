<style>
.num{
    color:red;
}
</style>

<form method="post">
    Início: <input type="number" name="i">
    Fim: <input type="number" name="f">
    <input type="submit">
</form>

<?php

if(isset($_POST['i'])){

    for($x=$_POST['i'];$x<=$_POST['f'];$x++){

        echo "<span class='num'>$x </span>";
    }
}

?>