<?php
    echo "This is for scope of the variables in PHP";
    echo "<br>";

    // Scope is area where particular variable is accessible

    local();
    


    $a = 98; // global
    echo "The value outside the function is " . $a . "<br>";

    global_fun();

    function local(){
        $a = 100; // local
        echo "The value inside the function is " . $a . "<br>";

    }

    function global_fun(){
        // we can't use the global variable declared outside of the function from inside
        // If we want the access of those variables then we will be needing the access and it can be achieved by using global variable

        global $a;
        echo "The value of variable which is global and still can be accesesd inside of the function is " . $a . "<br>";
        // as we have imported the global variables using global keyword and now if we modify these values inside of the function then it is confirmed that those changes will reflect into global scope and their values will be changed permanantly
        // when we try to access variable which is not defined in the function and declared outside of the function hence at that point we will get an error
        // as global scope in php is outside of the function
    }

    // as we can see in the output the variable defined outiside of the funtion has global scope it can be accessed in as well as out of the function

    // but the variable declared and defined inside the function is only accessible in the function only

    echo "<br>";

    echo var_dump($GLOBALS);
    // this variable is inbuilt which is used to access all the global variables inside of the function

?>