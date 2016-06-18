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
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./assistence.php">Assistence</a></li>
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
                    <div class="row pad-top">
                        <div class="col-lg-12">
                            
                        </div>
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
