<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
<?php 
  $logoObj = get_field('logo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
  $e_mail = get_field('femail', 'options');
  $show_telefoon = get_field('telephonehd', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
?>
<header  class="header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hdr-inner clearfix">
          <div class="hdr-left">
            <div class="hdr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
              </a>
            </div>
          </div>
          <div class="hdr-right clearfix hide-sm">
            <div class="hdr-phn hide-sm">
              <?php if( !empty( $show_telefoon ) ) printf('<a href="tel:%s">T: %s</a>', $telefoon, $show_telefoon);  ?>
            </div>
            <div class="header-rgt-menu">
              <nav class="hdr-nav">               
                <?php 
                  $cmenuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'clearfix ulc',
                      'container' => 'cmnav',
                      'container_class' => 'cmainnav'
                    );
                  wp_nav_menu( $cmenuOptions ); 
                ?>
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
              <?php 
                $mmenuOptions = array( 
                    'theme_location' => 'cbv_mbmain_menu', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'mcmnav',
                    'container_class' => 'mcmainnav'
                  );
                wp_nav_menu( $mmenuOptions ); 
              ?>
            </nav>
          </div>
          <?php if(!empty($show_telefoon)): ?>
          <div class="sm-phn-con show-sm">
            <div class="sm-phn-innr">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/sm-phn-icon.png" alt="" />
              </span>
              <a href="tel:<?php echo $telefoon; ?>" class="overlay-link"></a>            
            </div>  
          </div>
          <?php endif; if(!empty($e_mail)): ?>
          <div class="sm-mail-con show-sm">
            <div class="sm-mail-innr">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/sm-mail-icon.png" alt="" />
              </span>
              <a href="mailto:<?php echo $e_mail; ?>" class="overlay-link"></a>
            </div>  
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>