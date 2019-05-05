<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schooldb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

    if(isset($_POST['SubmitButton'])){
        $subjname = [];
        $undername = [];
        for($i = 0; $i < 8; $i++){
            $subjname[$i] = trim($_POST['subjname'.$i]);
            if($subjname[$i] != ''){
                if (!file_exists('../subjects/'.$subjname[$i])) { mkdir('../subjects/'.$subjname[$i], 0777, true); }
                $sql = "INSERT INTO mysubj (subj)
                        VALUES ('$subjname[$i]')";
                if ($conn->query($sql) === TRUE) { echo "Successfully added ".$subjname[$i]."<br>"; }
                else { echo "Error: " . $sql . "<br>" . $conn->error; }
                
                for($j = 0; $j < 5; $j++){
                    $undername[$j] = trim($_POST['undername'.$j]);
                    if($undername[$j] != ''){
                        if (!file_exists('../subjects/'.$subjname[$i].'/'.$undername[$j])) { mkdir('../subjects/'.$subjname[$i].'/'.$undername[$j], 0777, true); }
                        $sql = "ALTER TABLE mysubj ADD "."$undername[$j]"." varchar(30)";
                        if ($conn->query($sql) === TRUE) {
                            echo "With ".$undername[$j]." in sub-category. <br>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                }
            }
        }
    }
?>
<!doctype html>
<html>
    <head>
        <title>Get this shit done!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            input {
                margin: 5px;
                padding: 10px;
                border: 1px solid #a6a6a6;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div id="one" class="container" align="center"><br>
            <h1 style="margin: 8px; padding: 8px;">Let's build your system</h1><br>
            <form action='' method='post'>
                <div class="row">
                    <div class="col">
                        <h3>Enter upto 8 subjects</h3>
                        <?php 
                            for($i = 0; $i < 8; $i++){
                                echo'<input autocomplete="off" name="subjname'.$i.'" placeholder="Subject '.($i+1).'">';
                            }
                        ?>
                    </div>
                    <div class="col">
                        <h3>Enter the sub-category for each subject</h3>
                        <?php
                            $category = array('Theory', 'Practical', 'Prevoius Ques Paper', 'Syllabus', 'Website');
                            for($i = 0; $i < 5; $i++){
                                echo '<input autocomplete="off" name="undername'.$i.'" placeholder="'.$category[$i].'">';
                            }
                        ?>
                    </div>
                </div>
                <input type="submit" name="SubmitButton" class="btn btn-primary">
            </form>
        </div>
        <?php require_once('../footer.php'); ?>
