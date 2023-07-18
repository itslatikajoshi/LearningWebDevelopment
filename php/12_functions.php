<?php 

echo "Functions in php";

function processMarks ($marksArr)
{
    $sum =0;
    foreach($marksArr as $value)
    {
        $sum += $value;
    }
    return $sum;
}

$rohanDas =[34,98,45,12,98,93];
$sumMarks = processMarks($rohanDas);
echo "Total marks scored by Rohan out of 600 is $sumMarks";
echo"<br>";
$Latika =[54,78,65,52,98,93];
$sumMarks = processMarks($Latika);
echo "Total marks scored by Latika out of 600 is $sumMarks";
