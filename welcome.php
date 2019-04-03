<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<?php require_once('header.php'); ?>
<style>
    #welcmpage {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>
</head>
<body>
    <?php require_once('navbar.php'); ?>

    <div id="welcmpage" align="center">

        <div class="page-header">
            <h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.<br><br>
            This is<br> &copy; <b>Ishan Mathur</b> Production </h2><br>
        </div>
        
            <a href="reset-password.php" style="margin: 10px;" class="btn btn-outline-warning"><i class="material-icons">hourglass_empty</i><b> Reset Your Password </b></a>
            <a href="logout.php" style="margin: 10px;" class="btn btn-outline-danger"><i class="material-icons">input</i><b> Sign Out of Your Account </b></a><br>
            <a href="help.php" style="margin: 20px; width: 250px; border-radius: 15px; font-size: 27px;" class="btn btn-success"><i class="material-icons">group_work</i><b> Contribute </b></a>
        

    </div>

<?php require_once('footer.php'); ?>