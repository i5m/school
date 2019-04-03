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
  body {
    background-color: #333;
  }
    #uploadform {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>

</head>
<body> 

    <?php require_once('navbar.php'); ?>

    <h4 style="color: red; margin: 15px;" align="center"><i class="material-icons">alarm</i> Files uploaded should have topic's name as its name.<i class="material-icons">alarm</i></h4>

    <div id="uploadform" align="center">
      
      <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 300px; height: 60px; margin: 15px;">
          <p style="font-size: 30px;"><i class="material-icons">library_books</i> <b> Theory </b></p>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="https://driveuploader.com/upload/zWIZr6SUDG/" onclick="getPerson()">Eng. Physics Theory</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/W0tbkRiAbE/" onclick="getPerson()">Eng. Mechanics Theory</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/T0myQUV1Ao/" onclick="getPerson()">Maths</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/5oHoG3SCcR/" onclick="getPerson()">Adv. Java Theory</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/7FiOSS58K4/" onclick="getPerson()">Prof. Communication</a>
        </div>
      </div>
                                                                                <br><br>
      <div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 300px; height: 60px; margin: 15px;">
          <p style="font-size: 30px;"><i class="material-icons">touch_app</i> <b> Practical </b></p>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="https://driveuploader.com/upload/kFCCaYmmO8/" onclick="getPerson()">Eng. Physics Practical</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/zEzy5LGpNx/" onclick="getPerson()">Eng. Mechanics Practical</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/XcRd9JE2A3/" onclick="getPerson()">Matlab</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/XFsFGEP8fR/" onclick="getPerson()">Adv. Java Practical</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/B6vxvW6lIq/" onclick="getPerson()">Employblity Skills</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://driveuploader.com/upload/NrDA5VfZTB/" onclick="getPerson()">Workshop</a>
        </div>
      </div>

    </div>

    <script>
      function getPerson() {}
    </script>

<?php require_once('footer.php'); ?>