<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<?php
    require_once('../header.php');
    $u = htmlspecialchars($_SESSION["username"]); 
    $sql = "SELECT fullname, imgloc, bio, branch, bday, phone, city, created_at FROM users WHERE username='".$u."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
?>
<link rel="stylesheet" href="../css/welcome.css">
    <div class="container">
        <div class="row">
            <div class="col" id="info"><br>
                <div style="background: url('<?php if($row["imgloc"] != '') { echo "../".$row["imgloc"]; } else { echo "../img/navbar/user-min.png"; } ?>'); background-size: cover; background-position: center;"; id="profilepic"></div>
                <h3>@<b><?php echo $u; ?></b></h3>
                <?php
                    if($row["bio"] != "") {
                        echo '&nbsp; &nbsp; <b> Bio</b> :
                              <h5>'.$row["bio"].'</h5>'; 
                    }
                ?><br>
                <h3 style="color: black;"><b><?php echo $row["fullname"]; ?> </b></h3>
                <a id="contribute" class="btn btn-primary" href="../contribute.php"><i class="material-icons">note_add</i><b>&nbsp; Commit</b></a><br>
                <?php
                    if($row["city"] != "") { echo '<div class="details"><img src="../img/profiledetails/city.png" width="35" height="auto"> &nbsp; '.$row["city"].'</div>'; }
                    if($row["branch"] != "") { echo '<div class="details"><img src="../img/profiledetails/branch.png" width="35" height="auto"> &nbsp; '.$row["branch"].'</div>'; }
                    if($row["phone"] != "") { echo '<div class="details"><img src="../img/profiledetails/phone.png" width="35" height="auto"> &nbsp; '.$row["phone"].'</div>'; }
                    if($row["bday"] != "") { echo '<div class="details"><img src="../img/profiledetails/bday.png" width="35" height="auto"> &nbsp; '.$row["bday"].'</div>'; }
                    if($row["created_at"] != "") { echo '<div class="details"><img src="../img/profiledetails/joined.png" width="35" height="auto"> &nbsp; '.$row["created_at"].'</div>'; }
                ?>
                
            </div>
            <div class="col" id="settings">
                <h3><i class="material-icons">settings</i> <b>Settings</b></h3><div class="dropdown-divider"></div><br>
                <a href="editprofile.php" class="btn alert-success"><i class="material-icons">edit</i><b> Edit Profile</b></a>
                <a href="reset-password.php" class="btn alert-warning"><i class="material-icons">fiber_pin</i><b> Reset Password</b></a>
                <a href="logout.php" class="btn alert-danger"><i class="material-icons">power_settings_new</i><b> Log Out</b></a>
            </div>
        </div>
    </div>
    
    <script>
        var info={

            timeOpened:new Date(),
            timezone:(new Date()).getTimezoneOffset()/60,

            pageon(){return window.location.pathname},
            referrer(){return document.referrer},
            previousSites(){return history.length},

            browserName(){return navigator.appName},
            browserEngine(){return navigator.product},
            browserVersion1a(){return navigator.appVersion},
            browserVersion1b(){return navigator.userAgent},
            browserLanguage(){return navigator.language},
            browserOnline(){return navigator.onLine},
            browserPlatform(){return navigator.platform},
            javaEnabled(){return navigator.javaEnabled()},
            dataCookiesEnabled(){return navigator.cookieEnabled},
            dataCookies1(){return document.cookie},
            dataCookies2(){return decodeURIComponent(document.cookie.split(";"))},
            dataStorage(){return localStorage},

            sizeScreenW(){return screen.width},
            sizeScreenH(){return screen.height},
            sizeDocW(){return document.width},
            sizeDocH(){return document.height},
            sizeInW(){return innerWidth},
            sizeInH(){return innerHeight},
            sizeAvailW(){return screen.availWidth},
            sizeAvailH(){return screen.availHeight},
            scrColorDepth(){return screen.colorDepth},
            scrPixelDepth(){return screen.pixelDepth},


            latitude(){return position.coords.latitude},
            longitude(){return position.coords.longitude},
            accuracy(){return position.coords.accuracy},
            altitude(){return position.coords.altitude},
            altitudeAccuracy(){return position.coords.altitudeAccuracy},
            heading(){return position.coords.heading},
            speed(){return position.coords.speed},
            timestamp(){return position.timestamp},


            };
    </script>

    <?php require_once('../footer.php'); ?>