<?php require('conn.php') ;?> 
<?php $base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/beyondfabchem';?> 
<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$page = $components[2];
?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/autixir-preview/autixir/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 12:27:29 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Beyond Fabchem</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo $base_url ?>/assets/image/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/responsive.css">

    
</head>

<body>

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-4">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:sales@beyondfabchem.com"><i class="icon-mail"></i>sales@beyondfabchem.com</a></li>
                                <li><a href="https://goo.gl/maps/KMCHGw6icEVcDcUc6" target="_blank" rel="noopener"><i class="icon-placeholder"></i>122, Silverstone Arcade, Singanpor Causeway Road, Katargam, Surat - 395004</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                        <!-- <div class="site-logo-wrap"> -->
                            <div class="site-logo">
                                <a href="<?php echo $base_url ?>"><img src="<?php echo $base_url ?>/assets/image/logo.jpg" alt="Logo" class="logo-width"></a>
                            </div>
                            <div class="get-support clearfix  header-contact-us">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info ">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+919725593148">+91 97255 93148</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="<?php echo $base_url ?>" class="<?php if($page == ''){ echo 'active"';}?>">Home</a></li>
                                        <li><a href="<?php echo $base_url ?>/about-us/" class="<?php if($page == 'about-us'){ echo ' active"';}?>">About Us</a></li>
                                        <li class="menu-icon"><a href="<?php echo $base_url ?>/products/" class="<?php if($page == 'products' || $page == 'waterproof-cloth-tape' || $page == 'black-nylon-tape' || $page == 'black-woven-polyester-fabric' || $page == 'pink-rayon' || $page == 'non-waterproof-cloth-tape' || $page == 'double-side-cloth-tape' || $page == 'double-side-tissue-tape' || $page == 'performance-masking-tape' || $page == 'crepe-paper-masking-tape' || $page == 'blue-seam-sealing-tape' || $page == 'seam-sealing-machine' ){ echo ' active"';}?>">Products</a>
                                            <ul>
                                                <li ><a href="<?php echo $base_url ?>/waterproof-cloth-tape/">Waterproof Cloth Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/black-nylon-tape/">Black Nylon Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/black-woven-polyester-fabric/">Black Woven Polyester Fabric</a></li>
                                                <li ><a href="<?php echo $base_url ?>/pink-rayon/">Pink Rayon Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/non-waterproof-cloth-tape/">Non Waterproof Cloth Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/double-side-cloth-tape/">Double Side Cloth Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/double-side-tissue-tape/">Double Side Tissue Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/performance-masking-tape/">Performance Masking Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/crepe-paper-masking-tape/">Crepe Paper Masking Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/blue-seam-sealing-tape/">Blue Seam Sealing Tape</a></li>
                                                <li ><a href="<?php echo $base_url ?>/seam-sealing-machine/">Seam Sealing Machine</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo $base_url ?>/exhibitions/" class="<?php if($page == 'exhibitions'){ echo ' active"';}?>">Exhibitions</a></li>
                                        <li><a href="<?php echo $base_url ?>/blog/" class="<?php if($page == 'blog'){ echo ' active"';}?>">Blog</a></li>
                                        <li><a href="<?php echo $base_url ?>/contact/" class="<?php if($page == 'contact'){ echo ' active"';}?>">Contact</a></li>
                                        <li><a href="<?php echo $base_url ?>/career/" class="<?php if($page == 'career'){ echo ' active"';}?>">Career</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="<?php echo $base_url ?>"><img src="<?php echo $base_url ?>/assets/image/logo.jpg" alt="Logo" class="logo-width"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu">
            <ul>
                    <li><a href="<?php echo $base_url ?>" class="<?php if($page == ''){ echo 'active"';}?>">Home</a></li>
                    <li><a href="<?php echo $base_url ?>/about-us/" class="<?php if($page == 'about-us'){ echo ' active"';}?>">About Us</a></li>
                    <li class="menu-icon"><a href="<?php echo $base_url ?>/products/" class="<?php if($page == 'products' || $page == 'waterproof-cloth-tape' || $page == 'black-nylon-tape' || $page == 'black-woven-polyester-fabric' || $page == 'pink-rayon' || $page == 'non-waterproof-cloth-tape' || $page == 'double-side-cloth-tape' || $page == 'double-side-tissue-tape' || $page == 'performance-masking-tape' || $page == 'crepe-paper-masking-tape' || $page == 'blue-seam-sealing-tape' || $page == 'seam-sealing-machine' ){ echo ' active"';}?>">Products</a>
                        <ul>
                            <li ><a href="<?php echo $base_url ?>/waterproof-cloth-tape/">Waterproof Cloth Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/black-nylon-tape/">Black Nylon Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/black-woven-polyester-fabric/">Black Woven Polyester Fabric</a></li>
                            <li ><a href="<?php echo $base_url ?>/pink-rayon/">Pink Rayon Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/non-waterproof-cloth-tape/">Non Waterproof Cloth Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/double-side-cloth-tape/">Double Side Cloth Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/double-side-tissue-tape/">Double Side Tissue Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/performance-masking-tape/">Performance Masking Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/crepe-paper-masking-tape/">Crepe Paper Masking Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/blue-seam-sealing-tape/">Blue Seam Sealing Tape</a></li>
                            <li ><a href="<?php echo $base_url ?>/seam-sealing-machine/">Seam Sealing Machine</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $base_url ?>/exhibitions/" class="<?php if($page == 'exhibitions'){ echo ' active"';}?>">Exhibitions</a></li>
                    <li><a href="<?php echo $base_url ?>/blog/" class="<?php if($page == 'blog'){ echo ' active"';}?>">Blog</a></li>
                    <li><a href="<?php echo $base_url ?>/contact/" class="<?php if($page == 'contact'){ echo ' active"';}?>">Contact</a></li>
                    <li><a href="<?php echo $base_url ?>/career/" class="<?php if($page == 'career'){ echo ' active"';}?>">Career</a></li>
                </ul>
            </div>
            
            <!-- <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div> -->
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>