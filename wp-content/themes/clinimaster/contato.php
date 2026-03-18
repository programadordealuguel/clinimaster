<?php get_header(); the_post();  //Template Name: Contato ?>

<main class="principal">
    
  <section class="sec-tit-padrao sec-contato-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-7">
          <h1 class="tit-verde text-center">Formulário de contato</h1>
          <?php echo do_shortcode('[contact-form-7 id="7e8aadc" title="Contato"]');?>
        </div>
      </div>
    </div>
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'unidade' , 'posts_per_page' => 6 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-unidades-home">
    <div class="container">
      <h2 class="subtit-verde">Uma Unidade Clinimaster perto de você!</h2>
      <div class="row lista-unidades">
        <?php while($query->have_posts()) {  $query->the_post(); ?> 
        <div class="col-lg-4">
          <div class="cada-unidade-home">
            <?php echo get_field('iframe_unidade'); ?>
            <div class="content-cada-unidade">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              <div class="text-center d-block"><a target="_blank" href="<?php echo get_field('link_unidade'); ?>" class="btn-verde">Ver no mapa</a></div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
