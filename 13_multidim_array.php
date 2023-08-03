<?php
    echo "This is for multi dimensional array in php<br>";
    
    $arr = array(
        array(2,3,5,7), 
        array(1,2,3,1),
        array(4,5,0,1)
    );

    echo var_dump($arr);
    // This is va_dump function and it used to get the complete information about the variable which is given as parameters

    echo "<br>";

    echo $arr[0][0];
    // this is how we can access the first element of the first row of the array

    // lets see what is in third row and first columns
    // remember indexing starts from zero
    echo "<br>";
    echo "third row and first columns " . $arr[2][0];
    echo "<br>";

    // we can use loops to iterate through 2D array

    for ($i = 0; $i < count($arr); $i++){
        for ($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }

    // This is how we can iterate through 2D array
    // If you know java cpp then it must be easy for you

    

?>