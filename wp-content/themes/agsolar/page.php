<?php 
  get_header(); 
  get_template_part('templates/page', 'banner' );
?>
<section class="default-page pagebuilder">
  <?php 
   while(have_posts()): the_post();
   echo do_shortcode( get_the_content());
   endwhile;
  ?>  
</section>
<?php get_footer(); ?>