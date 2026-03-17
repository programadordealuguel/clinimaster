<?php get_header(); the_post();  //Template Name: Exames ?>

<main class="principal">
      
  <section class="sec-tit-padrao">
    <div class="container">
      <h1 class="tit-verde"><?php the_title(); ?></h1>
      <div class="row align-items-center">
        <div class="col-12">
          <?php the_content(); ?>
        </div>
      </div>
      <?php $query = new WP_Query( array( 'post_type' => 'exame' , 'posts_per_page' => -1 ) ); ?>
      <?php if($query->have_posts()) { ?> 
      <div class="row lista-exames-pag">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-xl-4">
          <a href="<?php the_permalink(); ?>" class="cada-exame-lista"><?php the_title(); ?></a>
        </div>
        <?php } ?>
      </div>
      <?php } wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="sec-cta-home sec-cta-img">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-6">
          <img src="<?php the_field('imagem_cta_imagem'); ?>" class="img-fluid" alt="clinimaster cirurgias">
        </div>
        <div class="col-lg-6">
          <?php echo acf_esc_html(get_field('texto_cta_imagem')); ?>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">Agende sua consulta oftalmológica</a>
        </div>
      </div>
    </div>
  </section>
  

</main>

<?php get_footer(); ?>
