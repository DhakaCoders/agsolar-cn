<footer class="footer-wrap">
  <div class="ftr-top-wrp">
    <div class="to-top-btn"></div>
    <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="ftr-info-lft clearfix">
          <div class="ftr-logo">
            <a href="#">
              <img src="<?php echo THEME_URI; ?>/assets/images/ftr-logo.png">
            </a>
          </div>
          <div class="ftr-info">
            <span><a href="#">AG Solar BV <br> Krommewijk 15J <br> 9501LA Stadskanaal</a></span>
            <span><a href="callto:0599 123 456">T: 0599 123 456</a></span>
            <span><a href="mailto:info@agsolar.nl">E: info@agsolar.nl</a></span>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-6 col-xs-12">
        <div class="ftr-info-dsc">
          <h2>Een pakkende eerste titel</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla metus, interdum quis porttitor eu, tincidunt faucibus enim. Cras eleifend eget turpis eget volutpat. Phasellus tempus ut ligula semper eleifend. Etiam id ligula a odio dapibus viverra et ac enim. Sed vestibulum lorem sem, vel auctor lectus dapibus eget</p>
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
          <p>&copy;2019 AG Solar, all rights reserved</p>
          <?php 
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