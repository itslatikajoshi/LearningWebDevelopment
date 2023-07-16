<?php 

echo "Functions in php";

function processMarks ($marksarr)
{
    $sum =0;
    foreach($marksarr as $value)
    {
        $sum += $value;
    }
    return $value;
}

$rohanDas =[34,98,45,12,98,93];
$sumMarks = processMarks($rohanDas);
echo "Total marks scored by Rohan out of 600 is $sumMarks";

?>