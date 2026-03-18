<?php get_header(); the_post();  //Template Name: Especialidades ?>

<main class="principal">
      
  <section class="sec-tit-padrao">
    <div class="container">
      <h1 class="tit-verde"><?php the_title(); ?></h1>
      <div class="row align-items-center">
        <div class="col-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'especialidade' , 'posts_per_page' => -1 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-especialidades-pag">
    <div class="container">
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-lg-6 col-xl-4">
          <h2><?php the_title(); ?></h2>
          <div class="cada-especialidade">
            <div class="img-especialidade" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>  
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn-verde">Saiba mais</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <section class="sec-cta-home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <?php echo acf_esc_html(get_field('texto_cta_1')); ?>
          <div class="text-center d-block"><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">Agende sua consulta</a></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
