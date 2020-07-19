<?php
    if(isset($_POST["btn_search"]))
    {
        $keyword = $_POST["search_keyword"];
        if(!empty($keyword))
        {
            header("location: http://localhost/Nhom420/Product/search/$keyword");
        }
    }
?>
        <header>
            <div id="bannerTop">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 col-md-8">Welcome to our Website!</p>
                        <div class="icon col-md-4 hidden-xs hidden-sm">
                            <!-- <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
                            <a href="https://twitter.com/"><i class="fa fa-rss" aria-hidden="true"></i></a>
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <!-- <a href=""><i class="fa fa-skype" aria-hidden="true"></i></a> -->
                            <a href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="https://www.google.com/"><i class="fa fa-google" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="banner" class="container">
                <div class="row">
                    <div class="logo col-xs-12 col-sm-2 col-md-2">
                        <a href="../Home"><img src="./images/logo.jpg" alt="Logo" ></a>
                    </div>
                    <div class="header-menu col-xs-12 col-sm-6 col-md-5">
                        <ul class="main-menu clearfix">
                            <li class="is-child">
                                <a href="../Product/Men">MEN</a>
                            </li>
                            <li class="is-child">
                                <a href="../Product/Women">WOMEN</a>
                            </li>
                            <li class="is-child">
                                <a href="../Sale">SALE</a>
                            </li>
                            <li class="is-child">
                                <a href="../Contact">CONTACT</a>
                            </li>
                        </ul>
                        <!-- <ul class="breadcrumb">
                            <li>
                                <a href="./index.html" title="Home">Home</a>
                                <span>></span>
                            </li>
                            <li>
                                <a href="./men.html" title="Men">Men</a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="search-box col-xs-12 col-sm-2 col-md-3">
                        <form class="navbar-form" action="" method="POST">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search" name="search_keyword">
                              <div class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="btn_search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="group-box col-xs-12 col-sm-2 col-md-2">
                        <a href="../Cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        <?php
                        if(isset($_SESSION["user"]))
                        {
                            echo '<a href="../Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                <br>
                                <span>Hi '.$_SESSION["user"].'</span>';
                        }
                        else{
                            echo '<a href="../Login"><i class="fa fa-user" aria-hidden="true"></i></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>            
        </header>