<?php 
get_header(); 
$hmbanner = get_field('hmbanner', HOMEID);
$bannerposter = '';
$hmvideo = $hmbanner['upload_video'];
if(!empty($hmbanner['image'])){
  $bannerposter = cbv_get_image_src($hmbanner['image']);
}
if(empty($hmvideo)):
?>
<section class="hdr-banner-wrp">
  <div class="hdr-banner-img animate-banner" style="background: url(<?php echo $bannerposter ; ?>)"></div>
  <div class="hdr-banner-bc">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-12">
          <?php cbv_breadcrumbs(); ?>
        </div>
      </div>
    </div> 
  </div>  
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <div class="hdr-banner-innr">
          <div class="hdr-banner-des">
          <?php if( !empty( $hmbanner['title'] ) ) printf( '<span>%s</span>', $hmbanner['title']); ?>
          </div>         
        </div> 
      </div>
    </div>
  </div>        
</section>
<?php else: ?>

<section class="main-baner-video">
  <div class="video-wrp"> 
    <video class="home-bnr-video" id="home-bnr-video" autoplay loop muted>
      <source src="<?php echo $hmvideo; ?>" type="video/mp4">
      <source src="<?php echo $hmvideo; ?>" type="video/ogg">
    </video>
  </div>
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <div class="hdr-banner-innr">
          <div class="hdr-banner-des">
          <?php if( !empty( $hmbanner['title'] ) ) printf( '<span>%s</span>', $hmbanner['title']); ?>
          </div>         
        </div> 
      </div>
    </div>
  </div>
  <div class="hdr-banner-bc">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-12">
          <?php cbv_breadcrumbs(); ?>
        </div>
      </div>
    </div> 
  </div>
</section>
<?php endif; ?>



<section class="frontpage pagebuilder">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php 
          while(have_posts()): the_post();
          echo do_shortcode( get_the_content());
          endwhile;
        ?>  
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>