<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodKa - Food Ordering, Delivery & Restuarent Template</title>
    <!--fivicon icon-->
    <link rel="icon" href="<?php get_template_directory_uri().'/assets/img/fevicon.png' ?>' ?>">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&family=Bebas+Neue&family=Satisfy&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    
	<?php wp_head(); ?>
</head>
<body class='sc5'>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div id="wave1">
            </div>
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup area start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- navbar start -->
    <header class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button> 
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li>
                            <?php
                                $args = array('theme_location' => 'main_menu');
                                    wp_nav_menu($args);     
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <a class="main-logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/logo.png' ?>" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                        </li>
                        <li class="phone-contact d-md-block d-none"><i class="ri-phone-fill float-start"></i>
                            +997 509 153 849
                        </li>
                        <li class="menu-cart"><a href="cart.html">CART <span>1</span></a></li>
                        <li>49.50 $</li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">                    
                    <ul>
                        <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                        </li>
                        <li class="phone-contact"><i class="ri-phone-fill float-start"></i>
                            +997 509 153 849
                        </li>
                        <li class="menu-cart"><a href="cart.html">CART <span>1</span></a></li>
                        <li>49.50 $</li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar end -->