<?php
    echo "This is for Associative array in php";

    $arr = array("this", 'that', 'king', 3131);

    echo "<br>";
    echo $arr[3];

    // This is simple array as we have seen in the previous lectures and in previous files

    // Now we will move to associative arrays 
    // This is like a dictionary in python and HashMap in java

    $arr = array("Rk" => 99,
                "Saurabh" => 100,
                "Gotya" => 110, 
                "Avi" => 111, 
                3131 => "King",
                "Sush" => 99
);
    // This is how the associative array is defined in the php

    echo "<br>";

    echo "Rk has scored" . $arr["Rk"];
    echo "<br>";

    echo "You were asking what is 3131 na? He is " . $arr[3131];

    // This is how elements i.e values associated with particular key and values are accessed in case of associative array

    // Now we will be using foreach loop to iterate through this array

    foreach ($arr as $key => $val){
        echo "<br>The marks obtained by $key are $val";
    }

    echo "<br>";
    
    $arr = array(
        "Sachin" => 100, 
        "Virat" => 76, 
        "Rohit" => 41, 
        "Dravid" => 45
    );

    foreach ($arr as $key => $val){
        echo "<br> Centuries scored by $key are $val";
    }
?>