<form method="post">

    Lado 1: <input type="number" name="a"><br>
    Lado 2: <input type="number" name="b"><br>
    Lado 3: <input type="number" name="c"><br>

    <input type="submit">

</form>

<?php

if(isset($_POST['a'])){

    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];

    if($a+$b>$c && $a+$c>$b && $b+$c>$a){

        if($a==$b && $b==$c){
            echo "Equilátero";
        }
        elseif($a==$b || $a==$c || $b==$c){
            echo "Isósceles";
        }
        else{
            echo "Escaleno";
        }

    }else{
        echo "Não forma triângulo";
    }
}

?>