<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<?php require_once('../config.php'); ?>
<?php require_once('../header.php'); ?>
</head>
<body>
    <form action="getnotif.php" method="post">
        <textarea rows="5" name="comment">sdwdsc</textarea>
        <input type="submit" value="submit">
    </form>
<?php require_once('../footer.php'); ?>
