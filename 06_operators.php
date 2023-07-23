<?php
    echo "<h1>This is for operators in php</h1>";
    echo "<br>";

    // They are used to perform calculation on operands
    // arithmetic, assignment, comparison, Logical

    // Arithmetic

    $a = 10;
    $b = 20;

    echo "a + b = " . $a + $b;
    echo "<br>";

    echo "a - b = " . $a - $b;
    echo "<br>";

    echo "a * b = " . $a * $b;
    echo "<br>";

    echo "a / b = " . $a / $b;
    echo "<br>";

    echo "a % b = " . $a % $b;
    echo "<br>";

    echo "a ** b = " . $a ** $b;
    // a raised to b
    echo "<br>";

    // Assignment operators

    $c = $a;
    echo "Value of c is " . $c;
    echo "<br>";
    echo "Value of a is " . $a;
    echo "<br>";

    echo "a+=5: " . $a+=5;
    echo "<br>";
    echo "a-=5: " . $a-=5;
    echo "<br>";
    echo "a*=5: " . $a*=5;
    echo "<br>";
    echo "a/=5: " . $a/=5;
    echo "<br>";
    // simillarly you can even a %= 5 to a too.

    // Comparison operators
    $x = 10;
    $y = 20;

    echo "If x greater than y: " . $x > $y;
    echo "<br>";

    echo "If x less than y: " . $x < $y;
    echo "<br>";

    echo "If x greater than equal to y: " . $x >= $y;
    echo "<br>";

    echo "If x less than equal to y: " . $x > $y;
    echo "<br>";

    echo "If not equal to y: " . $x != $y;
    echo "<br>";

    echo "If x equal to y: " . $x == $y;
    echo "<br>";

    // if returns false then it returns nothing 
    // we can resolve it using var_dump 
    // or if else can also be used which we will learn next

    // Logical operators
    // They are used in if else statement

    $bool1 = true;
    $bool2 = false;

    echo "For bool1 and bool2 " .var_dump($bool1 and $bool2);
    echo "<br>";

    echo "For bool1 or bool2 " . var_dump($bool1 or $bool2);
    echo "<br>";

    echo "For bool1 xor bool2 " . var_dump($bool1 xor $bool2);
    echo "<br>";

    echo "For not of bool2 " . !$bool2;
    echo "<br>";


?>