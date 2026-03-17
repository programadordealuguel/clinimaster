<?php get_header(); the_post();  //Template Name: Convênios ?>

<main class="principal">
      
  <section class="sec-tit-padrao">
    <div class="container">
      <h1 class="tit-verde"><?php the_title(); ?></h1>
      <div class="row align-items-center">
        <div class="col-12">
          <?php the_content(); ?>
        </div>
      </div>
      <?php $query = new WP_Query( array( 'post_type' => 'convenio' , 'posts_per_page' => 6 ) ); ?>
      <?php if($query->have_posts()) { ?> 
      <div class="content-convenios-pag">
        <div class="row align-items-center">
          <?php while($query->have_posts()) {  $query->the_post(); ?>
          <div class="col-xxl-2">
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="sec-cta-home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <?php echo acf_esc_html(get_field('texto_cta_1')); ?>
          <div class="text-center d-block"><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">Agendar consulta ou exames</a></div>
        </div>
      </div>
    </div>
  </section>
  
</main>

<?php get_footer(); ?>
