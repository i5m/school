<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<?php
require_once('../config.php');
$comm = $_POST["comment"];
$nam = $_SESSION["username"];
$sql = "INSERT INTO MyGuests (username, messages)
VALUES ('$nam', '$comm')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$link->close();
?>