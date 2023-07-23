<?php
    echo "<h1>This will tell us differnt string function</h1>";
    echo "<br>";


    $str = "This is the string on which we will be testing out string functions";

    echo "Lenght of the above string is ", strlen($str);
    echo "<br>";
    // strlen() this fucntion gets name of the string as input and then gives us output as length i.e total number of characters including white spaces

    echo "Total number of words in given string are " . str_word_count($str);
    echo "<br>";
    // str_word_count() this function is used to get us the words present in the string

    echo strrev($str);
    echo "<br>";
    // strrev function is used to get the reverse of the input string
    // if we assign it to original string then it will be changed actually but here we have not assigned it

    echo "Position of occurenece of the string 'be' in string is " . strpos($str, 'be');
    echo "<br>";
    // if there is any occurence of the string then it will give us index if not it will return nothing

    echo str_replace("be", 'see', $str);
    echo "<br>";
// here we have only replaced the character for the purpose of printing 
// if we want to change the original string then we have to assign it then only it will be able to reflect in the string


    echo $str;
    echo "<br>";
    // see original string is as it used to be before replacing the string

    echo str_repeat($str, 5);
    // This will repeat the string many number of times as we want

    // function like rtrim and ltrim are used to trim the void spaces from the right and left repectively

    
?>