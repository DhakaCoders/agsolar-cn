<?php 
  get_header(); 
  get_template_part('templates/page', 'banner' );
?>
<section class="default-page pagebuilder">
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