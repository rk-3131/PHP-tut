<?php
    // Here we will explore variables in the php

    // php is a dynamically typed language
    // hence we dont need to specify data type of the variable

    // hence we can use that to define and assign any value to the data

    $var = 100;
    echo "Old value of the variable" . var_dump($var);
    echo "<br>";

    // here name of the variable has to start with $
    // even to print the value on the output screen we have to use $

    // php is case insensitive language when it is about tags in php 
    // i.e echo and Echo will work

    // But but name of the variable are case sensitive in php

    $var = "This value is changes now to string";
    echo "Updated value of the variable is $var". var_dump($var);
    echo "<br>";
    
    // as we have changed the value of the variable in even after having same name 
    // hence we can say that we php is dynamically typed language 
    // data type is assigned after assiging value to variable

    // Rules for creating the variable with name 

    // name of the variable has to be given a prefix $ everytime when we have name of the variables
    // cannot start with a number 
    // can start with a letter or underscore (_)
    // it can contain alphanumeric character and underscore
    // name of the variable are case sensitive $harry $Harry $haRRy are different
?>