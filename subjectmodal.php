<?php
    $sqlmodal = "SELECT * FROM mysubj";
    $resultmodal = $conn->query($sqlmodal);
    if ($resultmodal->num_rows > 0) {
        // output data of each row
        while($rowmodal = $resultmodal->fetch_assoc()) {
            echo '<div class="modal fade" id="'.$rowmodal["subj"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">'.$rowmodal["subj"].'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <button style="margin: 10px; padding: 15px; width: 300px; border-radius: 50px;" class="btn alert-dark"><h3>'.$row["subj"].'</h3></button>
                        </div>
                        </div>
                    </div>
                </div>';
        }
    }

?>