<?php require_once('header.php'); ?>
<div id="container">
    <br><h2 style="margin: 8px; padding: 8px; font-family: 'Work Sans', sans-serif;"> <img src="img/navbar/home-min.png" width="50" height="auto"> Subjects...</h1><br>
    <div id="subjectlist" align="center">
        <?php
            $colorpallete = array('primary','warning','danger','success');
            $j = 0;
            $sql = "SELECT subj FROM mysubj";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<button style="margin: 10px; padding: 15px; width: 280px; border-radius: 50px;" class="btn alert-'.$colorpallete[$j].'" data-toggle="modal" data-target="#'.$row["subj"].'"><h3>'.$row["subj"].'</h3></button>';
                    $j++;
                    if($j == 3) { $j = -1; };
                }
            }
            else { echo "0 results"; }
        ?>
        <?php require_once('subjectmodal.php'); ?>
    </div>
</div>
<?php require_once('footer.php'); ?>