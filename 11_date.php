<?php
    echo "This is date tutorial";

    echo "<br>";
    $d = date("l");
    echo "Today's date is " . $d;
    // l is used to give us the name of the day we are in

    echo "<br>";
    $d = date("d l");
    echo "Today's date is " . $d;
    // d is used to have date with zero behind it if it is single digit

    echo "<br>";
    $d = date("j l");
    echo "Today's date is " . $d;
    // j is used to have a digit representation of date but there are no zeroes behind it

    echo "<br>";
    $d = date("dS M Y");
    echo "Today's date is " . $d;
    // S is used to give us postfix of a number, M gives us the month name in short and Y gives the year

    echo "<br>";
    $d = date("F Y");
    echo "Today's date is " . $d;
    // F gives us the month name in full August
    // M gives us month name in short Aug
?>

<!-- https://www.php.net/manual/en/function.date.php -->