<?php

echo "Associative array in php";

/* The arrays with the key value pair*/

$arrColor = array('Latika' => 'Blue', 'Naman' => 'Black', 'Anshu' => 'Red');

/* Fetching data via for each loop */

foreach ($arrColor as $key => $value) {
    echo "Fav color of $key is $value <br>";
}
?>