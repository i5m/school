<?php require_once('header.php'); ?>
<div id="container">
    <br><h1 style="margin: 8px; padding: 8px;">Subjects...</h1><br>
    <div id="subjectlist" align="center">
        <?php
            $colorpallete = array('primary','warning','danger','success');
            $j = 0;
            $sql = "SELECT subj FROM mysubj";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<button style="margin: 10px; padding: 15px; width: 300px; border-radius: 50px;" class="btn alert-'.$colorpallete[$j].'" data-toggle="modal" data-target="#'.$row["subj"].'"><h3>'.$row["subj"].'</h3></button>';
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