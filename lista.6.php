<<form method="post">
    Número: <input type="number" name="num">
    <input type="submit">
</form>

<?php

if(isset($_POST['num'])){

    $num = $_POST['num'];

    if($num % 2 == 0){
        echo "Par";
    }else{
        echo "Ímpar";
    }
}

?>