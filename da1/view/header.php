<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themesflat.co/html/modaz/index-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 00:52:09 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>BDT Fashion</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="./client/pub/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="./client/pub/stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="./client/pub/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="./client/pub/stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="./client/pub/stylesheets/animate.css">


    <!-- Favicon and touch icons  -->
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head> 
<body class="header_sticky header-style-1 topbar-style-1 has-menu-extra">
	 <!-- Boxed -->
    <div class="boxed">
        <div id="site-header-wrap">
            <!-- Top Bar -->
            <div id="top-bar">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <span class="content">FREE SHIPPING & FREE RETURNS ON ALL ORDERS</span>
                        </div>
                        <div class="top-bar-nav">

                            <div class="inner">                            
                                <div class="account">
                                    <a href="index.php?act=dangky">
                                        Register 
                                        <i class="fa fa-user"></i>
                                    </a>
                                </div>

                                <div class="account">
                                    <a href="index.php?act=dangnhap">
                                        Log in 
                                        <i class="fa fa-user"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Bar -->
            <!-- Header -->
            <header id="header" class="header header-container clearfix">
                <div class="container clearfix" id="site-header-inner">
                    <div id="logo" class="logo float-left">
                        <a href="index.html" title="logo">
                            <img src="./pub/images/logo.png" alt="image" width="107" height="24" data-retina="./pub/images/logo@2x.png" data-width="107" data-height="24">
                        </a>
                    </div><!-- /.logo -->
                    <div class="mobile-button"><span></span></div>
                    <ul class="menu-extra">
                        <li class="box-search">
                            <a class="icon_search header-search-icon" href="#"></a>
                            <form role="search" method="get" class="header-search-form" action="#">
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search">Search</button>
                            </form>
                        </li>
                        <li class="box-login">
                            <a class="icon_login" href="index.php?act=dangnhap"></a>
                        </li>
                        <li class="box-cart nav-top-cart-wrapper">
                            <a class="icon_cart nav-cart-trigger active" href="#"><span>3</span></a>
                            <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <div class="woocommerce-min-cart-wrap">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                <span>No Items in Shopping Cart</span>
                                            </li>
                                        </ul>
                                    </div><!-- /.widget_shopping_cart_content -->
                                </div>
                            </div><!-- /.nav-shop-cart -->
                        </li>
                    </ul><!-- /.menu-extra -->
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="index.php">HOME</a>
                                    <ul class="submenu">
=======
                                    <a href="index.php">HOME</a>
                                    <!-- <ul class="submenu">
>>>>>>> Stashed changes
                                        <li><a href="index.html">Homepage Style 1</a></li>
                                        <li class="active"><a href="index-v2.html">Homepage Style 2</a></li>
                                        <li><a href="index-v3.html">Homepage Style 3</a></li>
                                        <li><a href="index-v4.html">Homepage Style 4</a></li>
                                        <li><a href="index-v5.html">Homepage Style 5</a></li>
                                        <li><a href="index-v6.html">Homepage Style 6</a></li>
                                        <li><a href="index-v7.html">Homepage Style 7</a></li>
                                        <li><a href="index-v8.html">Homepage Style 8</a></li>
                                        <li><a href="index-v9.html">Homepage Style 9</a></li>
                                        <li><a href="index-v10.html">Homepage Style 10</a></li>   
                                    </ul> -->
                                </li>
                                <li>
                                    <a href="index.php?act=danhmuc.php">SHOP</a>
                                    <ul class="submenu">
                                        <?php
                                        if (is_array($listdm)) {
                                            foreach ($listdm as $catalog) {
                                                extract($catalog);
                                                $linkdm = "index.php?act=sanpham&id_dm=" . $id_cata;
                                                echo "<li><a href='" . $linkdm . "'>" . $name . "</a></li>";
                                            }
                                        } else {
                                            echo "Không có danh mục để hiển thị.";
                                        }
                                        ?>
                                        <!-- <li>
                                            <a href="shop-3col.html">Shop Layouts</a>
                                        </li> -->
                                        <!-- <li>
                                            <a href="shop-detail-des.html">Shop Details</a>
                                            <ul class="submenu">
                                                <li><a href="shop-detail-des.html">Details Description</a></li>
                                                <li><a href="shop-detail-exter.html">Details External</a></li>
                                                <li><a href="shop-detail-option.html">Details Options</a></li>
                                                <li><a href="shop-detail-fix.html">Details Fix</a></li>
                                                <li><a href="shop-detail-zoom.html">Details Zoom</a></li>
                                                <li><a href="shop-detail-group.html">Details Grouped</a></li>
                                                <li><a href="shop-detail-video.html">Details Video</a></li>                                              
                                            </ul> -->
                                        <!-- </li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="coming-soon.html">PAGE</a>
                                    <ul class="submenu">                                        
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html"> Error 404</a></li>
                                        <li><a href="faqs.html">FAQs</a></li>
                                    </ul>
                                </li>
                                <li >
                                    <a href="blog-list.html">BLOG</a>
                                    <ul class="submenu">
                                        <li ><a href="blog-list.html">Blog List Full</a></li>
                                        <li><a href="blog-list-1.html">Blog list Slide 1</a></li>
                                        <li><a href="blog-list-2.html">Blog list Slide 2</a></li>
                                        <li><a href="blog-grid.html">Blog Gird Full</a></li>
                                        <li><a href="blog-grid-1.html">Blog Gird Slide</a></li>
                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li>
                                    <a href="contact.html">CONTACT</a>
                                    <ul class="submenu right-submenu">
                                        <li><a href="contact.html">Contact Style 1</a></li>
                                        <li><a href="contact-v2.html">Contact Style 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.container-fluid -->
            </header><!-- /header -->
        </div><!-- /#site-header-wrap -->