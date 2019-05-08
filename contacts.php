<?php require_once('header.php'); ?>
    <br><h2 style="margin: 8px; padding: 8px; font-family: 'Work Sans', sans-serif;"> <img src="img/navbar/contacts-min.png" width="50" height="auto"> People</h2><br>
    <div class="container">
        <table class="table">
            <tbody>
                <?php
                    $sqlcontacts = "SELECT id, fullname, username, imgloc FROM users";
                    $resultcontacts = $conn->query($sqlcontacts);
                    if ($resultcontacts->num_rows > 0) {
                        while($rowcontacts = $resultcontacts->fetch_assoc()) {
                            if($rowcontacts['imgloc'] != '') { $contactspic = $rowcontacts["imgloc"]; }
                            else { $contactspic = 'img/navbar/user-min.png'; }
                            echo "<a href='../users/profile.php?id=".$rowcontacts['id']."'>
                                    
                                        <div style='border-radius: 50px; border: 1px solid #3399ff; width: 45px; height: 45px; background: url(".$contactspic."); background-size: cover;' id='profilepic'></div>
                                        <h6>".$rowcontacts['username']."<br>".$rowcontacts['fullname']."</h6>
                                    
                                  </a>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php require_once('footer.php'); ?>