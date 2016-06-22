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
        <!-- <link href="../css/sl_service.css" rel="stylesheet"> -->
        
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

                <div class="container" id="sl_service_container">

                    <!-- BreadCrump -->
                    
                    <div class="row" id="url_nav">
                        <ul class="breadcrumb">
                            <li><a href="./home.php">Home</a></li>
                            <li><a href="./sl_services_list.php">SL Services</a></li>
                            <li class="active">SL_Service</li>
                        </ul>
                    </div>

                    <!-- SL Service name fill-in with AJAX -->
                    
                    <div class="row" id="sl_name">
                        <h3></h3>
                    </div>

                    <!-- Main Part -->
                    
                    <div class="container row" id="sl_service_det_act_container">
                    
                        

                        <div class="sl_service_data_container col col-md-12 panel panel-default">
                            
                            <div class="sl_service_description row panel-body">

                                <div class="sl_service_description_container col col-md-7">
                                    <h3>Description</h4><br/>
                                    <div class="sl_service_description_text col col-md-12"><p></p></div>
                                </div>
                            


                                <div class="act_image_container col col-md-5">
                                    <!-- Image -->
                                    <div class="sl_service_image col col-md-12"><img class="center-block img-responsive" 
                                       id="sl_service_id"   src=""/></div>
                                    <!-- Activation and Rules Panel-->
                                    
                                    <div class="act_rules_data_container col col-md-12 panel panel-default">
                                        <div  class="row col col-md-12 panel-header"><h4>Activation and Rules</h4></div>
                                        <div class="act_rules_description row panel-body">
                                            <div class="act_rules_description_text col col-md-12"><p></p>
                                            </div>
                                            <div class="sl_service_price col col-md-8">
                                                <label class="sl_service_value row">
                                                    Price category: <label class="sl_service_price_text"></label>
                                                </label>
                                                <div class="row">
                                                        <button class="btn btn-primary"  id="add-cart">Add to Cart
                                                            <span class="glyphicon glyphicon-shopping-cart"></span>
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div
                            </div>
                        </div>
                    
                    </div>
                    
                    <!-- Devices Linked to this SL Service -->

                    <div class="linked_devices_container col col-md-12 panel panel-default">
                            <div  class="row col col-md-12 panel-header"><h3>Devices</h3></div>
                            <div class="linked_devices_description row panel-body">
                                <!-- Devices are filed with AJAX -->
                                
                                <!-- <div class=" col-sm-6 col-md-3">
                                    <div class="picture ">
                                        <img class="center-block device-img img-responsive" src="../img/devices/Phones/huawei-p9.jpg" alt="ImeUredjaja"/>
                                        <div class="sl-service-name caption"><h4>ImeUredjaja</h4>
                                            <p><a href="#" class="btn btn-primary" role="button">See Details</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-sm-6 col-md-3">
                                    <div class="picture ">
                                        <img class="center-block device-img img-responsive" src="../img/devices/Phones/huawei-p9.jpg" alt="ImeUredjaja"/>
                                        <div class="sl-service-name caption"><h4>ImeUredjaja</h4>
                                            <p><a href="#" class="btn btn-primary" role="button">See Details</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-sm-6 col-md-3">
                                    <div class="picture ">
                                        <img class="center-block device-img img-responsive" src="../img/devices/Phones/huawei-p9.jpg" alt="ImeUredjaja"/>
                                        <div class="sl-service-name caption"><h4>ImeUredjaja</h4>
                                            <p><a href="#" class="btn btn-primary" role="button">See Details</a></p>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                    </div>

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
        <script src="../js/sl_service.js"></script>


    </body>
</html>