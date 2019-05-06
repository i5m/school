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
    require_once('header.php');
?>
    <div class="container">
        <div class="page-header">
            <h5 style="margin: 5px; padding: 5px;" align="center">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to <b>COLEGIO</b></h5>
        </div>
        <div>
            <a href="reset-password.php" style="border-radius: 50px; margin: 5px;" class="btn btn-outline-warning"><b>Reset Password</b></a>
            <a href="logout.php" style="border-radius: 50px; margin: 5px;" class="btn btn-outline-danger"><b>Log Out</b></a>
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

    <?php require_once('footer.php'); ?>