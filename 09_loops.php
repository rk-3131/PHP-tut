<?php
    $my_array = array(1,2,3,4,5,6,7,8,9,10);

    // while loop 
    $i = 0;

    while($i < count($my_array)){
        echo "element at index " . $i . " " . $my_array[$i];
        echo "<br>";
        $i++;
    }

    // here value of $i is initialize to zero 
// it will check the condition and then if we get it true then it will execute and then necessary increamants will be done

    echo "<br>";
    // do while loop

    $i = count($my_array) - 1;

    do {
        echo "Element at index " . $i . " " . $my_array[$i];
        echo "<br>";
        $i--;
    }while($i >= 0);

    // it is same as while loop only difference is that it will execute at least once
    // as conditions are checked after execution

    echo "<br>";

    // for loop

    for ($i = 0; $i < count($my_array); $i++){
        echo "element at index " . " " . $my_array[$i];
        echo "<br>";
    }

    // it is same as while loop but we have to remember syntax and if you have done programming in other language then it will be easy 
    // but here increment will be done automatically

    echo "<br>";
    // for each loop

    foreach ($my_array as $var){
        echo "Element is " . $var;
        echo "<br>";
    }

    // foreach loop is shortcut to for loop
    // but it can be only used when we are working on array data structure

?>