<?php get_header(); the_post(); ?>

<main class="principal">
  <?php
    $categorias = get_the_category();
    $cat = $categorias[0];
  ?>
   
  <section class="sec-tit-padrao">
    <div class="container">
      <div class="d-block text-center" style="margin-bottom:15px"><a href="<?php echo $cat->slug;  ?>" class="link-cat"><?php echo $categorias[0]->name; ?></a></div>
      <h1 class="tit-verde"><?php the_title(); ?></h1>
      <div class="d-block text-center"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid img-single"></div>
      <div class="row align-items-center">
        <div class="col-12 text-format">
          <?php the_content(); ?>
        </div>
      </div>
      
    </div>
  </section>

  

</main>

<?php get_footer(); ?>
