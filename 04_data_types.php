<?php
    // This tutorial will tell us different data type of the php

    echo "<h1> Data Types in PHP</h1>";

    // integer non decimal number
    $num = 919;
    echo "This is integer data type ", var_dump($num);
    echo "<br>";

    // here var_dump() is a function which takes name of the variable as input and gives us value and data type of the variable as output

    // String array of character or sequence
    $str = "This is string variable and var_dump will tell you that ";
    echo "I am var dump and see data type and value of above variable is ",  var_dump($str);
    echo "<br>";
    // String can even be defined in single quotes

    // Float number with decimal number
    $flt = 154.45;
    echo "This is float and var_dump will tell you that " , var_dump($flt);
    echo "<br>";

    // Boolean value can be either of the true or false;
    $bln = true;
    echo "Value of the boolean operand is " , $bln;

    // Objects
    // They are called as instances of the classes
    // They are derived from classes
    // Human is a class ---> RK will be instance of the class i.e object;
    // Like human class has differnt properties associated with it
    // RK will resemble all the properties of human but value of these properties will differ as a object
    // Hope this anology will make you understand object and class well

    // Array
    // It is used to store large number of values in the variable
    $my_array = array("Item1", "Item2", "Item3", "Item4", "Item5", 100, 15.5, true);

    for ($i = 0; $i < count($my_array); $i++){
        echo "<br>";
        echo "Element at index $i ";
        echo $my_array[$i];
    }

    // here we can say that array can have large number of element in the same variable name
    // php array supports elements of differnt data types to be stored in the same array
    // To iterate over array loop can be used if you didn't unsertood the loop then its fine but just go through it we will discuss it later


    echo "<br>";
?>