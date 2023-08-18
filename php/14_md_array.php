<?php
    echo "Multi dimensional arrays in php <br>";

    /* Two dimensional array */

    $mdarray = array(
        array(2,5,7,8),
        array(1,2,3,1),
        array(4,5,0,1)
    );

     /* echo var_dump($mdarray); */

    /* Traversing the array */
    for ($i=0; $i < count($mdarray); $i++) { 
        for ($j=0; $j < count($mdarray[$i]); $j++) { 
            echo $mdarray[$i][$j];
            echo " ";
        }
        echo "<br>";
    }

?>
