<!-- 1.Session Start: -->

<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "john_doe";
$_SESSION["email"] = "john@example.com";

echo "Session variables are set.";
?>

<!-- 2.Session Display -->

<?php
// Start the session
session_start();

// Display session variables
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"];
?>

<!-- 3.Session Destroy -->

<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

echo "Session destroyed. User logged out.";
?>

<!-- 4.Session Check -->

<?php
// Start the session
session_start();

// Check if session is set
if(isset($_SESSION["username"])) {
    echo "Session is set. User is logged in.";
} else {
    echo "Session is not set. User is not logged in.";
}
?>

<!-- 5.Session Timeout -->

<?php
// Start the session
session_start();

// Set session timeout (in seconds)
$timeout = 1800; // 30 minutes

// Check if last activity time is set
if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
    echo "Session expired. User is logged out.";
} else {
    // Update last activity time
    $_SESSION['last_activity'] = time();

    echo "Session active. User is logged in.";
}
?>


