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
    #upldpage {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>
</head>
<body> 
    <?php require_once('navbar.php'); ?>

    <div id="upldpage" align="center">

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01"><i class="material-icons">note</i></label>
            </div>
            <select name="subject" class="custom-select" id="inputGroupSelect01" required>
                <option selected>Which Subject?</option>
                <option value="java">Advanced Java</option>
                <option value="skills">Employblity Skills</option>
                <option value="physics">Engineering Physics</option>
                <option value="matlab">Basics of MATLAB</option>
                <option value="workshop">Workshop Practice</option>
                <option value="mechanics">Engineering Mecahnics</option>
                <option value="maths">Maths II</option>
                <option value="comm">Prof Comm</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01"><i class="material-icons">call_split</i></label>
            </div>
            <select name="category" class="custom-select" id="inputGroupSelect01">
                <option value="theory">Thoery</option>
                <option value="practical">Practical</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons">gesture</i></span>
            </div>
            <input name="topic" type="text" class="form-control" placeholder="Topic?" aria-label="Topic?" aria-describedby="basic-addon1">
        </div>    

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload" required>
                <label class="custom-file-label" for="customFile"><i class="material-icons">send</i></label>
            </div>
        </div>

        <button type="submit" id="btna" onclick="loadicon()" class="btn btn-primary">Submit</button>

        <div style="display: none;" id="btnb" class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </form>

    </div>

    <script>
        function loadicon() {
            document.getElementById("btnb").style.display = 'block';
            document.getElementById("btna").style.display = 'none';
        }
    </script>

    <?php require_once('footer.php'); ?>