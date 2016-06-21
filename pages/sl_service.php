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
        <link href="../css/sl_service.css" rel="stylesheet">
        
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
                            <li><a href="./sl_services_list.php">SL Services</a></li>
                            <li class="active">SL_Service</li>
                        </ul>
                    </div>

                    <!-- SL Service name fill-in with AJAX -->
                    
                    <div class="row" id="sl_name">
                        <h3>Some random SL Name</h3>
                    </div>

                    <!-- Main Part -->
                    
                    <div class="container row" id="sl_service_det_act_container">
                    
                        <!-- Details -->
                    
                        <div class="sl_service_data_container col col-md-12 panel panel-default">
                            
                            <div class="sl_service_description row panel-body">

                                <div class="sl_service_description_text col col-md-7">
                                    <div  class="row col col-md-12 "><h3>Description</h4></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
                                </div>
                            

                                <!-- Activation and Rules Panel-->
                                
                                <div class="act_rules_data_container col col-md-5 panel panel-default">
                                    <div  class="row col col-md-12 panel-header"><h4>Activation and Rules</h4></div>
                                    <div class="act_rules_description row panel-body">
                                        <div class="act_rules_description_text col col-md-12"><p>adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttit</p>
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
                            </div>
                        </div>
                    
                    </div>
                    
                    <!-- Devices Linked to this SL Service -->

                    <div class="linked_devices_container col col-md-12 panel panel-default">
                            <div  class="row col col-md-12 panel-header"><h4>Devices</h4></div>
                            <div class="linked_devices_description row panel-body">
                                <!-- Devices are filed with AJAX -->
                                
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
                                </div>

                                <div class=" col-sm-6 col-md-3">
                                    <div class="picture ">
                                        <img class="center-block device-img img-responsive" src="../img/devices/Phones/huawei-p9.jpg" alt="ImeUredjaja"/>
                                        <div class="sl-service-name caption"><h4>ImeUredjaja</h4>
                                            <p><a href="#" class="btn btn-primary" role="button">See Details</a></p>
                                        </div>
                                    </div>
                                </div>

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
       


    </body>
</html>