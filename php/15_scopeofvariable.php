<?php
echo "Scope of local/global variables in php <br>";
$a = 98; // Global Variable
$b = 9;
function printValue(){
    // $a = 97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "<br> The value of your variable a is $a and b is $b";
}
echo "<br> The value of your variable a is $a and b is $b ";
echo "<br>";
printValue();
echo "<br>";
 echo var_dump($GLOBALS); 
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);




?>
