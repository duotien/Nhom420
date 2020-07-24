<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../Home">
                            <img src="admin/images/icon/logo.jpg" alt="G420" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="../Admin/Dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="../Admin/Product">
                                <i class="fas fa-usd"></i>Product</a>
                        </li>
                        <li>
                            <a href="../Admin/User">   
                                <i class="fas fa-user"></i>User</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="../Home">
                    <img src="admin/images/icon/logo.jpg" alt="Group 420" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li <?php if($data["ActiveMenu"] == "Dashboard") echo 'class="active has-sub"'; ?>>
                            <a href="../Admin/Dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li <?php if($data["ActiveMenu"] == "Product") echo 'class="active has-sub"'; ?> >
                            <a href="../Admin/Product">
                                <i class="fas fa-usd"></i>Product</a>
                        </li>
                        <?php 
                            if(isset($_SESSION["admin_user"]))
                            {
                                if($_SESSION["admin_user"]["type"] == 1)
                                {
                                    if($data["ActiveMenu"] == "User")
                                    {
                                        echo '<li class="active has-sub"><a href="../Admin/User"><i class="fas fa-user"></i>User</a></li>';
                                    }
                                    else
                                    {
                                        echo '<li><a href="../Admin/User"><i class="fas fa-user"></i>User</a></li>';
                                    }
                                }
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid" >
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="noti-wrap">
                                <div class="account-wrap">
                                    <div class="account">
                                        <div class="content">
                                            <span class="js-acc-btn"><?php echo $_SESSION["admin_user"]["name"] ?></span>
                                            <a href="../Admin/Logout">
                                                <i class="zmdi zmdi-power"></i>Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
