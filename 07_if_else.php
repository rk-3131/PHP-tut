<?php
    echo "<h1>If else statements</h1>";
    echo "<br>";

    $a = 10;
    
    if ($a < 10){
        echo "a is less than 10";
    }else{
        echo "a is not less than 10";
    }

    echo "<br>";

    if ($a == 10){
        echo "a is equal to 10";
    }else{
        echo "a is not equal to 10";
    }

    echo "<br>";

    if ($a == 19){
        echo "a is equal to 19";
    }
    elseif ($a == 10){
        echo "a is equal to 10";
    }else{
        echo "a has some different value";
    }
    echo "<br>";
?>