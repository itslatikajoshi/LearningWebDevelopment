<?php
$x =10;
echo $x;
function xyz()
{
    global $x;
    echo $x;
}

echo "<pre> ";
print_r($_SERVER);

?>