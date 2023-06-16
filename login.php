<?php
    #functions in php

    function add($t1,$t2)
    {
        $sum = $t1+$t2;
        return $sum;
    
    }

    echo add(2,3);
    echo"</br>";
    echo add(20,30);


die();

#database connection and data insertion

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"learn_web_development");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

#query to insert data

$sql = "INSERT INTO user_login ( email, password)
VALUES ( 'latika@gmail.com', 'admin')";

#check connection

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
die();

#cookies in php

$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Value is: " . $_COOKIE[$cookie_name];
echo "</br>";
setcookie("data", "LATIKA JOSHI", time() + (86400 * 30), "/"); 
echo "Value is: " . $_COOKIE["data"];

#form handling

$email = $_POST["email"];
$password = $_POST["password"];
if ($email == "latika@gmail.com" && $password == "admin") {
    /* echo ("Welcome to Homepage");
    echo "LOGIN PAGE";
    print_r($_POST); */
    /* header('Content-Type: application/json; charset=utf-8');

    echo json_encode(["data" => "login successful"]); */
} else {
    echo ("INVALID id password");
}

?>