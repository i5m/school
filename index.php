<?php require_once('header.php'); ?>

<style> 
    #indexbtn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .btn {
        width: 165px;
        height: 75px;
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;
        border-bottom-left-radius: 25px;
        margin-top: 10px;
        margin-left: 7px;
    }   
</style>

</head>
    <body>

        <div id="indexbtn" align="center">
            <button type="button" style="width: 110px; height: 40px; border-radius: 15px; margin: 7px;" onclick="window.location.href='assignments.php'" class="btn btn-dark">Assignments</button>
            <button type="button" style="width: 110px; height: 40px; border-radius: 15px; margin: 7px;" onclick="window.location.href='login.php'" class="btn btn-dark">Log in</button><br>
            
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl1" class="btn btn-outline-primary"> <i class="material-icons">book</i> <b> Advanced Java </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl2" class="btn btn-outline-success"> <i class="material-icons">book</i> <b> Engineering Physics </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl3" class="btn btn-outline-warning"> <i class="material-icons">book</i> <b> Employblity Skills </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl4" class="btn btn-outline-danger"> <i class="material-icons">book</i> <b> Basics of MATLAB </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl5" class="btn btn-outline-primary"> <i class="material-icons">book</i> <b> Workshop Practice </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl6" class="btn btn-outline-success"> <i class="material-icons">book</i> <b> Engineering Mecahnics </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl7" class="btn btn-outline-warning"> <i class="material-icons">book</i> <b> Maths II </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl8" class="btn btn-outline-danger"> <i class="material-icons">book</i> <b> Prof Comm </b> </button>
        </div>

        <?php require_once('modalindex.php'); ?>

<?php require_once('footer.php'); ?>