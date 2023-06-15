
<?php 
$name = true; 
var_dump($name);
echo '</br>';
print ($name);
echo '</br>';
echo "I am learning web development $name"; 
echo '</br>';
$names =["Gaurav","Latika","Joshi","Anshula"];
echo '<pre>';
var_dump($names);
echo '</pre>';
echo '</br>';
echo '<pre>';
print_r($names);
echo '</pre>';
echo $names[3];
echo '</br>';
$names[]="Deepak";
array_push($names,"Seeta");
array_unshift($names,"Pglu");
for ($i=0;$i<count($names);$i++)
{
    echo $names[$i];
    echo '</br>';
}

$data = ["name"=>"Gaurav","city"=>"Chandigarh"];
print_r($data["city"]);
?>