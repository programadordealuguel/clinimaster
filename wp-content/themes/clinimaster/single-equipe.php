<?php get_header(); the_post(); ?>

<main class="principal">

  <section class="ver-corpo-clinico">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 text-center">
          <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="medico">
        </div>
        <div class="col-lg-7">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="d-block text-center"><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">Agendar agora</a></div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
