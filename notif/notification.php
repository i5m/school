<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<?php require_once('../header.php'); require_once('../navbar.php'); ?>
<?php
require_once('../config.php');
$sql = "SELECT id, username, messages, reg_date FROM MyGuests";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["id"]. $row["username"]. " " . $row["messages"].$row["reg_date"]."<br>";
    }
} else {
    echo "0 results";
}
$link->close();
?>
<?php require_once('../footer.php'); ?>