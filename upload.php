<?php
$subject = $_POST["subject"];
$category = $_POST["category"];
$topic = $_POST["topic"];
$target_dir = "uploads/".$subject."/".$category."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is acceptable - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not acceptable.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Subject: " . $subject."<br>"."Topic: ".$topic."<br>";
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sgvu0";
/*
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $subject (subject, topic)
VALUES ('$subject', '$topic')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); */

?>

<!--
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="refresh" content="5;url=index.php" />
    <head>
    <body>
        <h3 align="center"> You will be redirected to homepage in 5 seconds</h3>
    </body>
</html> -->