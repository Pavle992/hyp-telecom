<?php
    require_once('../php/dbconnection.php');

    if (isset($_GET['id'])) {
        $assistenceId = $_GET['id'];

        $db = new MySql();
        $db->connect();

        $sql = "SELECT name, description  FROM assistance WHERE id=$assistenceId";

        $result = $db->con->query($sql);

        $row = $result->fetch_assoc();

        // $sqlDevices = "SELECT id_dev FROM dev_assistance WHERE id ="  . $row['id'] . "";
        // $resultDevices = $db->con->query($sqlDevices);


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
    <link href="../css/assistence_single.css" rel="stylesheet">
    
	<!-- Thumbnail gallery responsive -->
    <!-- <link href="resources/css/thumbnail-gallery.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../lib/js/jquery-2.2.4.min.js"></script>
    <script src="../js/assistence.js"></script>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Assistence</a></li>
                    <li class="active"> <?php echo $row['name']; ?> </li>
                </ol>

                <!-- Main body -->
                <div class="row">
                    <div class="col-lg-12 pad-top">
                        <h2 id="assistence_title">
                            <?php  echo $row['name']; ?>
                        </h2>
                        
                    </div>

                    <div class="col-lg-12 pad-top">
                        <p id="assistence_desc">
                            <?php echo $row['description']; ?>
                        </p>
                        
                    </div>

                    <!-- DEVICES -->
                    <div class="row">
                    <div class="col-lg-12 pad-top">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <div class="row">
                                      <div class="col-lg-3 col-lg-offset-1">

                                        <div class="col-lg-3 col-lg-offset-1 device-block">

                                            <div class="device-image"><img src="../img/phones/LG-Nexus5.jpg" class="device-image"></div>
                                            <div class="text-center"><h4>Nexus</h4></div>
                                            <div class="text-center"><form action="../pages/devices.html" methode="get"><input type="hidden" name="id" value= 1 >
                                                <button class="btn btn-primary" type="submit">Details</button></form>
                                            </div>
                                        </div>
                                     
                                      </div>
                                      <div class="col-lg-3 col-lg-offset-1">
                                          
                                          <div class="col-lg-3 col-lg-offset-1 device-block">
                                            
                                            <div class="device-image"><img src="../img/devices/Phones/LG-Nexus5.jpg" class="device-image"></div>
                                            <div class="text-center"><h4>Nexus</h4></div>
                                            <div class="text-center"><form action="../pages/devices.html" methode="get"><input type="hidden" name="id" value= 1 >
                                                <button class="btn btn-primary" type="submit">Details</button></form>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-lg-3 col-lg-offset-1">
                                          <div class="col-lg-3 col-lg-offset-1 device-block">
                                            
                                            <div class="device-image"><img src="../img/phones/LG-Nexus5.jpg" class="device-image"></div>
                                            <div class="text-center"><h4>Nexus</h4></div>
                                            <div class="text-center"><form action="../pages/devices.html" methode="get"><input type="hidden" name="id" value= 1 >
                                                <button class="btn btn-primary" type="submit">Details</button></form>
                                            </div>
                                        </div>
                                      </div>

                                  </div>
                                </div>
                            <div class="item">
                              <img src="..." alt="...">
                              <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        ...
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
                    </div>

                    <div class="footer"></div>
                </div>
            </div>
        </div>
    </div>
          
            <!-- EOF PAGE -->

    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
