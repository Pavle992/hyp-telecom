<?php 
    session_start();
    if(!isset($_SESSION['total_items'])){
    $_SESSION['total_items']=null;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
        <title>TIM SL Services</title>
        <!-- Bootstrap -->
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="css/index.css" rel="stylesheet"> -->
        <!-- <link href="../css/sl_services_list.css" rel="stylesheet"> -->
        
        <script src="../lib/js/jquery-2.2.4.min.js"></script>
    </head>

    <body>

        <div class="container-fluid">
        
            <!-- Landmarks -->
            <div class="row"> 
                <div class="col-md-12">
                    <?php require_once('../php/template_landmarks.php'); ?>
                </div>
                
            </div>
            <!-- Begin page wrapper -->
            <div class="page-wrap">

                <div class="container" id="sl_services_container">

                    <!-- BreadCrump -->
                    <div class="row" id="url_nav">
                        <ul class="breadcrumb">
                            <li><a href="./home.php">Home</a></li>
                            <li class="active">SL_Services</li>
                        </ul>
                    </div>

                    <!-- Jumbotrons -->
                    

                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Telecom 2016</p>
            </div>
        </footer>

        <script src="../lib/bootstrap/js/bootstrap.min.js"></script> <!-- !!! -->
        <script src="../js/loadPageContent.js"></script>
       


    </body>
</html>