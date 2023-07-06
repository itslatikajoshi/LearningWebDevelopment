<?php
class Greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
Greeting::welcome();

 #Alternate method to call function without static keyword 
/* $greeting = new Greeting();
$greeting -> welcome(); */
