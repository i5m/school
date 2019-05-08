<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schooldb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

    if(isset($_POST['AddAssignmentBtn'])){
        $selectSubject = $_POST['subject'];
        $addAssignment = $_POST['addassignment'];
        $duedate = $_POST['duedate'];

        $sql = "INSERT INTO myassign (subj, activity, duedate)
                VALUES ('$selectSubject','$addAssignment','$duedate')";
        if ($conn->query($sql) === TRUE) { echo "<div class='alert-warning' style='margin: 10px; padding: 20px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);'> <h4>Succesfully added ".$selectSubject." assignment '".$addAssignment."' due on ".$duedate."</h4> </div><br>"; }
        else { echo "Error: " . $sql . "<br>" . $conn->error; }
    }

    $sql = "SELECT id, subj, activity, duedate FROM myassign";
    $result = $conn->query($sql);

    if(isset($_POST['deleteassignment'])){
        $data = $_POST['deleteassignment'];
        $selectrow = str_replace("Delete", "", $data);
        $dataquery = "DELETE FROM myassign WHERE id=".$selectrow."";
        if ($conn->query($dataquery) === TRUE) {
            echo "Record removed.";
        }
        else { echo "Error deleting record: " . $conn->error; }
    }
?>
<!doctype html>
<html>
    <head>
        <title>Edit Assignments</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            input, select, textarea {
                margin: 5px;
                padding: 5px;
                border: 1px solid #a6a6a6;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container" align="center"><br>
            <h1 style="margin: 8px; padding: 8px;">Assignment Page</h1><br><br>
            <div class="alert-success" style="margin: 5px; padding: 10px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <h3>Add a Assignment</h3><br>
                <form action="" method="post">
                    <div class="row">
                        <div cass="col" style="width: 30%">
                            <h5>Select a Subject</h5>
                            <select name="subject">
                                <?php
                                    $sql = "SELECT subj FROM mysubj";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="'.$row["subj"].'">'.$row["subj"].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col" style="width: 30%">
                            <h5>What's the Assignment</h5>
                            <textarea name="addassignment" required></textarea>
                        </div>
                        <div class="col" style="width: 30%">
                            <h5>Due Date</h5>
                            <input type="date" name="duedate" min="2018-01-01" max="2025-12-31">
                        </div>
                    </div><br>
                    <input type="submit" name="AddAssignmentBtn" class="btn btn-success" value="Add Assignment">
                </form>
            </div><br><br>

            <div class="alert-danger" style="margin: 5px; padding: 10px; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                <h3>Manage Assignments</h3>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT id, subj, activity, duedate FROM myassign";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<tr>
                                            <th scope="row">'.$row["id"].'</th>
                                            <td>'.$row["subj"].'</td>
                                            <td>'.$row["activity"].'</td>
                                            <td>'.$row["duedate"].'</td>
                                            <td>'.'<form action="" method="post"> <input type="submit" class="btn btn-outline-danger" value="Delete'.$row["id"].'" name="deleteassignment"> </form>'.'</td>
                                        </tr>';
                                }
                            }
                            else { echo "<br><h2 align='center'>No assignment yet!</h2><br>"; }
                        ?>
                    </tbody>
                </table><br>
            </div>
        </div><br>
        <?php require_once('../footer.php'); ?>