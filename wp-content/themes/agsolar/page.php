<?php 
get_header(); 
$thisID = get_the_ID();
$pagebner = get_field('pagebanner', $thisID);

$bnrsrc = '';
if(!empty($pagebner)) $bnrsrc = cbv_get_image_src($pagebner, 'pgbanner');

?>
<section class="page-banner-wrp">
  <div class="hdr-banner-img animate-banner" style="background: url('<?php echo $bnrsrc; ?>')"></div>
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
<section class="default-page pagebuilder">
  <?php 
   while(have_posts()): the_post();
   echo do_shortcode( get_the_content());
   endwhile;
  ?>  
</section>
<?php get_footer(); ?>