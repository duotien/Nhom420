<!DOCTYPE html>
<html lang="vi">
    <head>
        <title>Men</title>
        <base href="http://localhost/Nhom420/"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/favicon.ico"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/men.css">
        <link rel="stylesheet" href="./css/responsive.css">
        <link rel="stylesheet" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
                        <img src="./images/logo.jpg" alt="Logo" >
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
                        <ul class="breadcrumb">
                            <li>
                                <a href="./index.html" title="Home">Home</a>
                                <span>></span>
                            </li>
                            <li>
                                <a href="./men.html" title="Men">Men</a>
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
                        <a href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <hr>
        <div id="titleContainer">
            <b style="font-size: 22px; color: red;">CÁC SẢN PHẨM NỔI BẬT NHẤT</b>
            <div class="dropdown" id="btnDropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Sort by </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Ascending ↑</a>
                <a class="dropdown-item" href="#">Decrease ↓</a>
                </div>
            </div>
            <div class="HideFilter" id="btnHideFilter">
                <button type="button" class="btn btn-primary" >HideFilter</button>
            </div>
        </div>
        <a id="button"><i class="fa fa-chevron-up"></i></a>
        <div id="category" class="container-fluid">
            <div class="row">
                <div class="left-420-filter-panel col-md-2">
                    <div class="n420-filter-search-status">
                        <div class="n420-filter-search-status_text" style="font-size: 17px; margin-left: 5px;">BỘ LỌC SẢN PHẨM<br>---------------</br></div>
                    </div>
                    <div class="n420-filter-group n420-facet-filter" style="margin-left: 5px;">
                        <div class="n420-filter-group-header">Theo Danh Mục</div>
                        <div class="folding-items n420-filter-group_body folding-items--folded">
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="420-checkbox_control">
                                        <input type="checkbox" id="opt_1"/>
                                    </label>
                                    <span class="n420-checkbox_label">Nike</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_2"/>
                                    </label>
                                    <span class="n420-checkbox_label">Adidas</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_3"/>
                                    </label>
                                    <span class="n420-checkbox_label">Converse</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_4"/>
                                    </label>
                                    <span class="n420-checkbox_label">Puma</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_5"/>
                                    </label>
                                    <span class="n420-checkbox_label">Vans</span>
                                </div>
                            </div>
                        </div>
                        <div class="n420-filter-group-header">Theo Size</div>
                        <div class="folding-items n420-filter-group_body folding-items--folded">
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_6"/>
                                    </label>
                                    <span class="n420-checkbox_label">38</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_7"/>
                                    </label>
                                    <span class="n420-checkbox_label">39</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_8"/>
                                    </label>
                                    <span class="n420-checkbox_label">40</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_9"/>
                                    </label>
                                    <span class="n420-checkbox_label">41</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_10"/>
                                    </label>
                                    <span class="n420-checkbox_label">42</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_11"/>
                                    </label>
                                    <span class="n420-checkbox_label">43</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_12"/>
                                    </label>
                                    <span class="n420-checkbox_label">44</span>
                                </div>
                            </div>
                            <div class="n420-filter n420-checkbox-filter">
                                <div class="n420-checkbox">
                                    <label class="n420-checkbox_control">
                                        <input type="checkbox" id="opt_13"/>
                                    </label>
                                    <span class="n420-checkbox_label">45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="n420-filter-button" style="margin-left: 5px ;">
                        <button id="btnSubmit" class="n420-filter-button-submit" type="submit">Lọc</button>
                        
                        <button id="btnReset" class="n420-filter-button-reset" type="reset">Làm mới</button>
                    </div>
                </div>
                <div class="right-bodyContainer col-md-10">
                    <h2 class="n420-product-title">Trending</h2>
                    <?php 
                        $con = mysqli_connect("localhost", "root", "", "quanligiaydep") or die("Connect failed!");
                        $qry = "Select * from product ORDER BY id DESC";

                        $result = mysqli_query($con, $qry);

                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="n420-product-box">
                            <a href="<?php echo $row['id'] . ".php" ?>">
                                <img class="n420-product-image" src="<?php echo $row['img_path'] ?>" alt=""/>
                                <!--img class="n420-product-icon" src="" alt=""-->
                                <div class="n420-product-name-price">
                                    <b><?php echo $row['name'] ?></b>
                                    <span><?php echo $row['price'] ?></span>
                                </div>
                            </a>
                        </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
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
        <script src="./js/main.js"></script>
        <script type="text/javascript"></script>
        <html>
        <script>
            $(document).ready(function(){
                $(".btn").click(function(){
                    if($(this).text() == "HideFilter"){
                        $(".left-420-filter-panel").hide(100);
                        $(this).text("ShowFilter");
                        $(".right-bodyContainer").css("margin-left","10%");
                    }
                    else if($(this).text() == "ShowFilter"){
                        $(".left-420-filter-panel").show(100);
                        $(this).text("HideFilter");
                        $(".right-bodyContainer").css("margin-left","0%");
                        }
                });
                $(".folding-items").append("<div><p>-----------------</p></div>");
                $("#btnReset").click(function(){
                    $("[id^='opt_']").prop("checked", false);
                    $(".folding-items").attr("data-value","");
                    $(".right-bodyContainer").ready();
                });
            });
            
        </script>
        </html>
    </body>
</html>