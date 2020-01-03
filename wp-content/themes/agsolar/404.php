<?php 
get_header(); 
$bnrsrc = THEME_URI.'/assets/images/page-banner.jpg';
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
<section class="error-404-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
        <div class="block-1070 clearfix article-inner" id="main-content">
          <div class="article-content" style="text-align: center;padding:100px 0;">
    				<h1>404</h1>
    				<p>Deze pagina bestaat niet.</p>
          </div>
        </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>