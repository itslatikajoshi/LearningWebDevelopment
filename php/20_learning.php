<?php

// Generate a random integer
echo rand(0, 900000);

// Get PHP version 
echo phpversion(); //Output something like this: 8.2.4 

// ============
// Array in PHP
// ============
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //Indexed array
$name = ["Latika", "Gaurav"]; //Indexed array

//Associative array
$child_detail = array(
    'name' => ucwords("john doe"), // Uppercase the first character of each word in a string
    'age' => 26,
    'qualification' => "BTech",
    'phnumbers' => [
        'idea' => '8755588588', //idea
        'vi' =>  '8556909577', //vi
        'voda' => '8556909578', //voda     
        'docomo' => '8556909579', //docomo
        'spice' => '8556909570', //spice
        'bsnl' => '8556909571', //bsnl
        'airtel' => '8556909572', //airtel
        'jio' => '8556909573', //jio
        'hutch' => '8556909574', //hutch        
    ]
);

/**
 * Accessing values from an Associative array
 */
$nameFromArray = $child_detail['name'];
$age = $child_detail['age'];
$qual = $child_detail['qualification'];
$phoneNos = $child_detail['phnumbers'];
$num1 = $phoneNos['idea'];
$num2 = $phoneNos['vi'];


echo $phoneNos['hutch'] . "\n"; // Output the string

$outPutString  = "My name is ";
$outPutString .= $nameFromArray; // Uppercase the first character of each word in a string
$outPutString .= ", my age is ";
$outPutString .= $age;
$outPutString .= " and my qualification is ";
$outPutString .= $qual;
$outPutString .= ucwords(" my phone numbers are "); //Make a string's first character uppercase
$outPutString .= "$num1 $num2 ";
$outPutString .= "\n";

/**
 * Output:
 * My name is John Doe, my age is 26 and my qualification is BTech My Phone Numbers Are 8755588588 8556909577
 */
echo $outPutString;

echo "My phone numbers are " . "\n";

foreach ($name as $key => $value) {
    echo  $key . "=" . $value . "\t\n";
}
echo "My phone numbers are " . implode(", ", $phoneNos) . "\n";
$our_name = "Gaurav,Latika,Naveen";
echo json_encode(explode(",", $our_name));


function getChildDetail($name)
{
    return "";
}
$child_detail = getChildDetail("john doe");
