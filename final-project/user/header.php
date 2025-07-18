        <?php
            session_start();
        ?>
        <div class="container-fluid">
            <div class="row  navbar-fixed-top">
                <div class="col-sm-12">

                
                <div class="row">
                    <div class="col-sm-12 background">
                        
                        <!-- logo image -->
                        <div class="row">
                            <div class="col-sm-2 background" style="text-align: center;">
                                <img src="images/logo.png" style="margin-top: 10px;" class="logo_img" alt="">
                            </div>

                            <!-- menu bar -->
                            <div class="col-sm-8 background">
                                <nav class="navbar navbar-default header_background background">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="mynav" class="collapse navbar-collapse" >
                                        <ul class="nav navbar-nav">
                                            <li><a style="line-height: 70px; color: #09221f;" href="index.php">Home</a></li>
                                            <li><a class="dropdown-toggle" data-toggle="dropdown" style="line-height: 70px; color: #09221f;" href="">Category</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="birthday.php">Birthday</a></li>
                                                    <li><a href="anniversary.php">Anniversaries</a></li>
                                                    <li><a href="event.php">Buisness Events</a></li>
                                                </ul>
                                            </li>
                                            <li><a style="line-height: 70px; color: #09221f;" href="FAQ.php">FAQ</a></li>
                                            <li><a style="line-height: 70px; color: #09221f;" href="contact_us.php">Contact Us</a></li>
                                            <li><a style="line-height: 70px; color: #09221f;" href="cart.php">Cart</a></li>
                                            <li><a class="dropdown-toggle" data-toggle="dropdown" style="line-height: 70px; color: #09221f;" href="">Order Info.</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="view_orders.php">Order History</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- login button -->
                            <div class="col-sm-2 background">
                                <label for="">
                                    <?php    
                                        if(isset($_SESSION['name'])){
                                            echo "Welcome ". $_SESSION['name'];
                                        }
                                    ?>
                                </label>
                                <?php
                                    if(!isset($_SESSION['name'])){
                                        echo "<a href='log_reg.php' style='line-height: 35px' class='btn btn-default loginbtn'>Login</a>";
                                    }
                                    else{
                                        echo "<br><a href = 'logout.php' class='btn btn-default loginbtn' style='line-height: 35px'>Logout</a>";
                                    }
                                ?>
                                
                            </div>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>


