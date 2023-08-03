<?php
    echo "<h1>This is for function</h1>";
    echo "<br>";

    my_fun();
    my_fun();
    my_fun();
    // even though function is defined in the later part of program it can be called here too.



    function my_fun(){
        echo "This is called using function";
        echo "<br>";
    }
    // function is defined here and can be called by its name

    echo "Sum of number 1 and 2 is " . sum_fun(1, 2);
    // as function is returning the values hence we can directly print those values.
    echo "<br>";


    function sum_fun($num1, $num2){
        return $num1 + $num2;
    }
    // return statement is used to get the value back from the function

    // $marks = array(1,2,3,4,5,6,7,8,9,10);
    $marks = [1,2,3,4,5,6,7,8,9,10];
    // Array can also be defined like this also
    echo "Average of all marks in the array which are given below";
    echo "<br>";

    foreach($marks as $mark){
        echo $mark . " ";
    }
    echo "<br>";

    echo "Average is " . get_avg($marks);
    echo "<br>";


    function get_avg($marks){
        $sum = 0;
        $count = 0;
        foreach ($marks as $mark){
            $sum += $mark;
            $count++;
        }
        return $sum / $count;
    }
?>