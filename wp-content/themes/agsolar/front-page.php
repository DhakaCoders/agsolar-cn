<?php get_header(); 

$hmbanner = get_field('hmbanner', HOMEID);
$bannerposter = '';
if(!empty($hmbanner['image'])){
  $bannerposter = cbv_get_image_src($hmbanner['image']);
}

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



<section class="frontpage pagebuilder">
  <?php 
   while(have_posts()): the_post();
   echo do_shortcode( get_the_content());
   endwhile;
  ?>  
</section>
<?php get_footer(); ?>