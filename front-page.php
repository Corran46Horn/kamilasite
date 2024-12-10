<?php get_header(); ?>
<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col col-12 col-md-6">
        <a href="" class="post-wrap">
          <img src="images/MMUE2.jpg" alt="" />
          <div class="text-wrap">
            <p class="header">Szlakiem muzeów migracji w UE...</p>
            <p>czytaj dalej</p>
          </div>
        </a>
      </div>
      <div class="col col-12 col-md-6">
        <a href="" class="post-wrap">
          <img src="images/MMUE.jpg" alt="" />
          <div class="text-wrap">
            <p class="header">
              Mobilność, wielokulturowość, inkluzja społeczna
            </p>
            <p>czytaj dalej</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <?php the_content(); ?>
</div>
<?php get_footer(); ?>