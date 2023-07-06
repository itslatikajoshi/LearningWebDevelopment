<?php

$numbers = array(1, 23, 54, 7475, 2241);

$data = array(
    "name" => "Latika",
    "city" => "Haldwani",
    "emails" => array(
        "itslatikajoshi@gmail.com",
        "latikajoshi143@gmail.com"
    )
);

/* for ($i = 0; $i < 5; $i++) {
    echo $numbers[$i];
    echo "\n";
} */


/* for ($i = 0; $i < 3; $i++) {
    echo $data[$i];
    echo "\n";
} */

foreach ($data as $key => $value) {
    echo $key. "\n \n";
    if ($key == "emails") {
        foreach ($value as $emails) {
            echo $emails . "\n";
        }
    } else {
        echo $value;
        echo "\n";
    }
}
