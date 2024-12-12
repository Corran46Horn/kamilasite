<?php get_header(); ?>
<div class="container">
  <h1 class="title"><?php echo get_the_title(  ); ?></h1>
  <?php the_content(); ?>
</div>
<?php get_footer(); ?>