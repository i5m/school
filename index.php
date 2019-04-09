<?php require_once('header.php'); ?>

<style> 
    @media only screen and (max-width: 3400px) {
        #indexbtn .btn {
            width: 300px;
            height: 150px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            margin-top: 20px;
            margin-left: 14px;
            }  
    }
    @media only screen and (max-width: 1260px) {
        #indexbtn .btn {
            width: 250px;
            height: 125px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            margin-top: 20px;
            margin-left: 14px;
            }  
    }
    @media only screen and (max-width: 1100px) {
        #indexbtn .btn {
            width: 200px;
            height: 100px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            margin-top: 10px;
            margin-left: 7px;
            }  
    }
    @media only screen and (max-width: 860px) {
        #indexbtn .btn {
            width: 160px;
            height: 75px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            margin-top: 10px;
            margin-left: 7px;
            }  
    }
    @media only screen and (max-width: 580px) {
        #indexbtn .btn {
            width: 145px;
            height: 75px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            margin-top: 10px;
            margin-left: 7px;
            }  
    }
    @media only screen and (max-width: 350px) {
        #indexbtn .btn {
            width: 135px;
            height: 80px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
            margin-top: 10px;
            margin-left: 7px;
            }  
    }
</style>

</head>
    <body>
        <?php require_once('navbar.php'); ?>
        <br><br>
        <div id="indexbtn" align="center">
            <br><br>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl1" class="btn btn-outline-primary"> <i class="material-icons">book</i> <b> Advanced Java </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl2" class="btn btn-outline-success"> <i class="material-icons">book</i> <b> Engineering Physics </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl3" class="btn btn-outline-warning"> <i class="material-icons">book</i> <b> Employblity Skills </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl4" class="btn btn-outline-danger"> <i class="material-icons">book</i> <b> Basics of MATLAB </b> </button><br>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl5" class="btn btn-outline-success"> <i class="material-icons">book</i> <b> Workshop Practice </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl6" class="btn btn-outline-danger"> <i class="material-icons">book</i> <b> Engineering Mecahnics </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl7" class="btn btn-outline-primary"> <i class="material-icons">book</i> <b> Maths II </b> </button>
            <button type="button" data-toggle="modal" data-target=".bd-example-modal-xl8" class="btn btn-outline-warning"> <i class="material-icons">book</i> <b> Prof Comm </b> </button><br><br>
            <br><br><br>
            <?php require_once('modalindex.php'); ?>

        </div>

<?php require_once('footer.php'); ?>