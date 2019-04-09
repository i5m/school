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
    @media only screen and (max-width: 3400px) {
        #fixsize {
            font-size: 35px;
        }
    }
    @media only screen and (max-width: 600px) {
        #fixsize {
            font-size: 25px;
        }
    }
    @media only screen and (max-width: 450px) {
        #fixsize {
            font-size: 18px;
        }
    }
</style>
</head>
<body>
    <?php require_once('navbar.php'); ?>
<br>
    <div align="center" style="margin: 20px;">
        <br><br>
        <div class="page-header">
            <p id="fixsize">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.<br><br>
            This is &copy; <b>Ishan Mathur</b> Production </p><br>
        </div>
        <br>
            <a href="reset-password.php" style="margin: 10px;" class="btn btn-outline-warning"><i class="material-icons">hourglass_empty</i><b> Reset Your Password </b></a>
            <a href="logout.php" style="margin: 10px;" class="btn btn-outline-danger"><i class="material-icons">input</i><b> Sign Out of Your Account </b></a><br>
            <a href="help.php" style="margin: 20px;" class="btn btn-outline-primary"><i class="material-icons">group_work</i><b> Contribute </b></a>
        
    </div>

<?php require_once('footer.php'); ?>