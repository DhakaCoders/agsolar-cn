<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/custom-fonts.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/responsive.css">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->  

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header  class="header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hdr-inner clearfix">
          <div class="hdr-left">
            <div class="hdr-logo">
              <a href="#">
                <i>
                  <img class="logo-main" src="<?php echo THEME_URI; ?>/assets/images/logo.png">
                </i>
              </a>
            </div>
          </div>
          <div class="hdr-right clearfix hide-sm">
            <div class="hdr-phn hide-sm">
              <a href="#">0599 330 110</a>
            </div>
            <div class="header-rgt-menu">
              <nav class="hdr-nav">               
                <ul class="ulc clearfix ">
                  <li><a href="#">AG Solar</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Oplossingen</a>
                    <ul class="ulc sub-menu">
                      <li><a href="#">Agrarisch</a></li>
                      <li><a href="#">Solar parken</a></li>
                      <li><a href="#">Industrie</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Projecten</a></li>
                  <li><a href="#">Carriere</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="home-bnr-sm-nav-bar-controller show-sm">
            <div class="sm-menu-humberger-btn">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/humberger-icon.png" alt="" />
              </span>
            </div>
          </div>
          <div class="sm-popup-main-menu-wrap">
            <nav class="sm-popup-main-nav text-right clearfix">
              <ul class="clearfix ulc">
                <li><a href="#">Home</a></li>
                <li><a href="#">AG Solar</a></li>
                <li class="menu-item-has-children">
                  <a href="#">Oplossingen</a>
                  <ul class="sub-menu ulc">
                    <li><a href="#">Agrarisch</a></li>
                    <li><a href="#">Solar parken</a></li>
                    <li><a href="#">Industrie</a></li>
                  </ul>
                </li>
                <li><a href="#">Projecten</a></li>
                <li><a href="#">Carriere</a></li>
              </ul>
            </nav>
          </div>
          <div class="sm-phn-con show-sm">
            <div class="sm-phn-innr">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/sm-phn-icon.png" alt="" />
              </span>
              <a href="#" class="overlay-link"></a>            
            </div>  
          </div>
          <div class="sm-mail-con show-sm">
            <div class="sm-mail-innr">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/sm-mail-icon.png" alt="" />
              </span>
              <a href="#" class="overlay-link"></a>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</header>