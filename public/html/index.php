<!DOCTYPE html>
<html>
    <head>
        <title>Men's, Women's shoes and sneakers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../images/favicon.ico"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <div id="bannerTop">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 col-md-8">Welcome to our Website!</p>
                        <div class="icon col-md-4 hidden-xs hidden-sm">
                            <!-- <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
                            <a href=""><i class="fa fa-rss" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <!-- <a href=""><i class="fa fa-skype" aria-hidden="true"></i></a> -->
                            <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-google" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="banner" class="container">
                <div class="row">
                    <div class="logo col-xs-12 col-sm-2 col-md-2">
                        <img src="../images/logo.jpg" alt="Logo" >
                    </div>
                    <div class="header-menu col-xs-12 col-sm-6 col-md-5">
                        <ul class="main-menu clearfix">
                            <li class="is-child">
                                <a href="men.html">MEN</a>
                            </li>
                            <li class="is-child">
                                <a href="">WOMEN</a>
                            </li>
                            <li class="is-child">
                                <a href="">SALE</a>
                            </li>
                            <li class="is-child">
                                <a href="">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-box col-xs-12 col-sm-2 col-md-3">
                        <form class="navbar-form" action="">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search">
                              <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="group-box col-xs-12 col-sm-2 col-md-2">
                        <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        <div id="account">
                            <?php
                                session_start();
                                if(isset($_SESSION["user"])){
                                    echo "Hello, " . $_SESSION["user"] . "<button id='logout'>logout</button>";
                                }
                                else {
                                    echo '<a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- <div id="highlight" class="container-fluid">
            <div class="row">
                <div class="left-highlight col-md-6">
                    <img src="../images/placeHolder.jpg" alt="">
                </div>
                <div class="right-highlight col-md-6">
                    <img src="../images/placeHolder.jpg" alt="">
                </div>
            </div>    
        </div> -->
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/slide1.png" alt="slide1" >
                <!-- <div class="carousel-caption">
                  <h3>Los Angeles</h3>
                  <p>We had such a great time in LA!</p>
                </div>    -->
              </div>
              <div class="carousel-item">
                <img src="../images/slide2.png" alt="slide2" >
                <!-- <div class="carousel-caption">
                  <h3>Chicago</h3>
                  <p>Thank you, Chicago!</p>
                </div>    -->
              </div>
              <div class="carousel-item">
                <img src="../images/slide3.png" alt="slide3" >
                <!-- <div class="carousel-caption">
                  <h3>New York</h3>
                  <p>We love the Big Apple!</p>
                </div>    -->
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        
        <div id="category" class="container">
            <p>Danh mục</p>
            <div class="row">
                <div class="left col-md-6">
                    <h3>Men</h3>
                </div>
                <div class="right col-md-6">
                    <h3>Women</h3>
                </div>
            </div> 
            <div class="row">
                <div class="left-category col-md-6">
                    <img src="../images/placeHolder.jpg" alt="">
                </div>
                <div class="right-category col-md-6">
                    <img src="../images/placeHolder.jpg" alt="">
                </div>
            </div>    
        </div>
        <a id="button"><i class="fa fa-chevron-up"></i></a>
        <footer>     
            <div class="container">
                <div class="row">
                    <div class="infor col-11 col-sm-11 col-md-4">
                        <p class="p-title">PT SHOES</p>
                        <table style="width:100%">
                            <tr>
                              <td>Address:</td>
                              <td>280 An Duong Vuong, Ward 4, District 5,<br/> Ho Chi Minh City </td>
                            </tr>
                            <tr>
                              <td>Phone:</td>
                              <td>09.9999.9999</td>
                            </tr>
                            <tr>
                              <td>Email:</td>
                              <td>nhom420@gmail.com</td>
                            </tr>
                            <tr>
                               <td>Website:</td>
                               <td>www.nhom420.com</td>
                            </tr>
                          </table>
                    </div>
                    <div class="infor col-11 col-sm-11 col-md-3">
                        <p class="p-title">About</p>
                        <ul>
                            <li><a href="">Purchase Policy</a></li>
                            <li><a href="">Payment policy</a></li>
                            <li><a href="">Return Policy</a></li>
                            <li><a href="">Shopping guide</a></li>
                        </ul>
                    </div>
                    <div class="infor col-11 col-sm-11 col-md-5">
                        <p class="p-title">Fanpage</p>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTruy%E1%BB%81n-Th%C3%B4ng-Chi-H%E1%BB%99i-CNTT-K44C-321330655320418%2F&tabs=timeline&width=300px&height=200px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                        width="300px" height="200px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">
                        </iframe>
                    </div>
                </div>
            </div> 
            <div class="bg-image"></div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <p class="col-12 col-sm-12 col-md-9">&copy;&nbsp;Copyright 2020, 420 team Allright Reserved.</p>
                    </div>  
                </div>          
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(document).on('click', '#logout', function(){
                $.ajax({
                    url: "logout.php",
                    method: "POST",
                    data: {},
                    success: function(data) {
                        $('#account').html('<a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>');
                    }
                });
            });
        </script>
    </body>
</html>