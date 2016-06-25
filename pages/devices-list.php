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
    <title>Telecom</title>
    <!-- Bootstrap -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/index.css" rel="stylesheet"> -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/devices-list.css" rel="stylesheet">
    
	<!-- Thumbnail gallery responsive -->
    <!-- <link href="resources/css/thumbnail-gallery.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../lib/js/jquery-2.2.4.min.js"></script>
    <script src="../js/devices-list.js"></script>
</head>

<body>

    

    <div class="container-fluid">

        <!-- Landmarks Header -->
        <div class="row"> 
            <div class="col-lg-12 landmarks">
                <?php require_once('../php/template_landmarks.php'); ?>
            </div>
            
        </div>

        <!-- Page Wrapper -->
        <div class="row">
            <div class="container">

                <!-- Path -->
                <ol class="breadcrumb path">
                    <li><a href="./home.php">Home</a></li>
                    <li class="active">Devices</li>
                </ol>

                <!-- Main body -->
                <div class="row">
                    <div class="col-lg-12 pad-top">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"  id="prom-tab"><a href="#prom-cat" aria-controls="promo" role="tab" data-toggle="tab" onclick='handlePromClick();'>Promotion</a></li>
                            <li role="presentation" id="cat-tab"><a href="#prom-cat" aria-controls="category" role="tab" data-toggle="tab" onclick='handleCatClick();'>Category</a></li>

                        </ul>

                        <!-- Tab panes -->
                        
                        <div class="tab-content pad-top">
    
                            <!-- Devices on Promotion Tab -->
                            <div role="tabpanel" class="tab-pane active" id="prom-cat">
    
                                <!-- Radiobox for Categories -->
    
                                
                                <div class="row">
                                    <div class="col-lg-2" id="side-radio">
                        
                                        <div>
                                            <h4> Categories </h4>
                                        </div>
                        
                                        <div class="input-group" onclick='filterClick(this);'>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="all" checked="" id="filter-all" onclick='handleAllClick(this);'>All</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="phone" id="filter-phone">Phones</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="tablet" id="filter-tablet">Tablets</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="smart" id="filter-smart">Smart Devices</label>
                                            </div>
                                        </div>
    
                                    </div>
                                    <!-- EOF Side -->

                                    <!-- Device Grid -->

                                    <div class="col-lg-9 pad-top" id="grid">
                                        <!-- FILLING IN SPACE WITH AJAX -->

                                    </div>   

                                </div>
                
                            </div>
                            <!-- EOF Devices -->

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Telecom 2016</p>
        </div>
    </footer>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/landmarks_active_elemetns.js"></script>
</body>

</html>
