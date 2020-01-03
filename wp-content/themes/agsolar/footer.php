<?php 
  $cominfoid = get_field('company_info', 'options');
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
      <?php

        if( !empty( $cominfoid ) ){
          $cQuery = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page'=> 1,
            'post__in' => array($cominfoid)
          ));
        if( $cQuery->have_posts() ){
      ?>
        <div class="ftr-info-dsc">
        <?php 
          while($cQuery->have_posts()): $cQuery->the_post(); 
            the_content();
          endwhile;
        ?>

        </div>
      <?php } wp_reset_postdata(); } ?>
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
<?php wp_footer(); ?>
</body>
</html>