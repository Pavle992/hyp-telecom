
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="nav-brand"><a href="./home.php"><img src="../img/logo.png"/></a></span>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav">
                    <li class="active" id="nav-home"><a href="./home.php">Home</a>
                    </li>
                    <li id="nav-devices"><a href="./devices-list.php">Devices</a>
                    </li>
                    <li id="nav-smartlife"><a href="./sl_services_list.php">Smart Life</a>
                    </li>
                    <li id="nav-assistence"><a href="./assistence.php">Assitence</a>
                    </li>
                    <li id="nav-who-we-are"><a href="#aboutUs">Who we are</a>
                    </li>
                    <li id="nav-group"><a href="#news">The Group</a>
                    </li>
                    <li id="nav-contact"><a href="#contact">Contact</a>
                    </li>
                    <li id="nav-cart"><a href="./cart.php">Cart <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span id="cart-icon" class="badge"><?php echo $_SESSION['total_items']?></span></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
   
