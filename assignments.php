<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schooldb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
?>

<?php require_once('header.php'); ?>
    <br><h2 style="margin: 8px; padding: 8px; font-family: 'Work Sans', sans-serif;"> <img src="img/navbar/assignment.png" width="50" height="auto"> Assignments</h2>
    <div align="center">
        <b>Sort by: </b>
        <button type="button" onclick="sortSubject()" style="margin: 5px; border-radius: 50px;" class="btn alert-primary"><b>Subject</b></button>
        <button type="button" onclick="sortDate()" style="margin: 5px; border-radius: 50px;" class="btn alert-danger"><b>Date</b></button>
    </div><br>
    <table style="margin: 5px; padding: 5px;" class="table" id="myTable">
    <thead>
        <tr>
        <th scope="col">Subject</th>
        <th scope="col">Activity</th>
        <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT subj, activity, duedate FROM myassign";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>'.$row["subj"].'</td>
                            <td>'.$row["activity"].'</td>
                            <td>'.$row["duedate"].'</td>
                        </tr>';
                }
            }
            else { echo "<br><h2 align='center'>No assignment yet!</h2><br>"; }
        ?>
    </tbody>
    </table><br>
    <p align="center"> <i class="material-icons" style="vertical-align: top;">error_outline</i> Please contact admin to manage Assignments. </p>


<script>

    function sortSubject() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[0];    
            y = rows[i + 1].getElementsByTagName("TD")[0];
            //check if the two rows should switch place:
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
            }
            }
            if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            }
        }
    }

    function sortDate() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[2];    
            y = rows[i + 1].getElementsByTagName("TD")[2];
            //check if the two rows should switch place:
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                //if so, mark as a switch and break the loop:
                shouldSwitch = true;
                break;
            }
            }
            if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            }
        }
    }

</script>
<?php require_once('footer.php'); ?>