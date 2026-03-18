<?php get_header(); the_post(); ?>

<main class="principal">

  <section class="sec-tit-padrao">
    <div class="container">
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
