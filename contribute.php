<?php require_once('header.php'); ?>
<style>
    select {
        width: 200px;
        margin: 10px;
        padding: 10px;
        border-radius: 15px;
    }
</style>
<form>
    <div class="container" id="one"><br>
        <h3>Select a Subject: </h3>
        <select id="subject">
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
        <h3>Select the Sub-Category: </h3>
        <select id="subcategory">
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
</form>
<?php require_once('footer.php'); ?>