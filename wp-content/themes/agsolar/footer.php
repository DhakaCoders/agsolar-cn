<?php 
  $cominfo = get_field('company_info', 'options');
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
  $adres = get_field('address', 'options');
  $e_mailadres = get_field('femail', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

?>
<footer class="footer-wrap">
  <div class="ftr-top-wrp">
    <div class="to-top-btn"></div>
    <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="ftr-info-lft clearfix">
          <div class="ftr-logo">
            <a href="<?php echo esc_url( home_url('/') );?>">
              <?php echo $logo_tag; ?>
            </a>
          </div>
          <div class="ftr-info">
            <?php 
              if( !empty( $adres ) ) printf('<span><a href="%s" target="_blank">%s</a></span>', $gmaplink, $adres); 
              if( !empty( $show_telefoon ) ) printf('<span><a href="tel:%s">T: %s</a></span>', $telefoon, $show_telefoon); 
              if( !empty( $e_mailadres ) ) printf('<span><a href="mailto:%s">E: %s</a></span>', $e_mailadres, $e_mailadres); 
            ?>     
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="ftr-info-dsc">
        <?php 
          if(!empty($cominfo['title'])) printf('<h2>%s</h2>', $cominfo['title']);
          if($cominfo['desc']) echo wpautop( $cominfo['desc']);
        ?>
        </div>
      </div>
    </div>
   </div> 
  </div>
  <div class="ftr-btm-wrp">
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="ftr-btm-dsc clearfix">
          <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text);
            $mmenuOptions = array( 
                'theme_location' => 'cbv_ftmain_menu', 
                'menu_class' => 'clearfix hide-xs',
                'container' => 'ccmnav',
                'container_class' => 'ccmainnav'
              );
            wp_nav_menu( $mmenuOptions ); 
          ?>
        </div>
      </div>
    </div>
   </div> 
  </div>
</footer>



<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap-select.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/slick.slider/slick.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo2-QJ7RdCkLw3NFZEu71mEKJ_8LczG-c"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/app.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>