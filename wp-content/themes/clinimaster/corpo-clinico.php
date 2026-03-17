<?php get_header(); the_post();  //Template Name: Corpo Clínico ?>

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

  <section class="sec-cirurgias-pag">
    <div class="container">
      <h5 class="tit-corpo-clinico">CORPO CLÍNICO</h5>
    </div>
  </section>

  <?php
  $query = new WP_Query( array(
    'post_type'      => 'equipe',
    'posts_per_page' => -1,
    'meta_query'     => array(
      array(
        'key'     => 'selecione_tipo',
        'value'   => 'corpoclinico',
        'compare' => '='
      )
    )
  ) );
  ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-corpo-clinico-pag">
    <div class="container">
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-xxl-4">
          <div class="cada-clinico">
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="title">    
            <h2><?php the_title(); ?></h2>
            <p><?php the_field('especialidade_equipe'); ?></p>
            <p><?php the_field('crmrqe'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-verde">Ver mais</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <section class="sec-cirurgias-pag">
    <div class="container">
      <h5 class="tit-corpo-clinico">ATUAÇÃO MULTIDISCIPLINAR</h5>
    </div>
  </section>

  <section class="sec-tit-padrao">
    <div class="container">
      <h2 class="tit-verde">Um cuidado completo, com diferentes especialidades</h2>
      <div class="row align-items-center">
        <div class="col-12">
          <p>A Clinimaster reúne profissionais com diferentes áreas de atuação, o que permite uma abordagem integrada no cuidado com a saúde. Esse trabalho em equipe garante avaliações mais completas, decisões médicas mais seguras e tratamentos personalizados para cada necessidade.</p>
        </div>
      </div>
    </div>
  </section>

  <?php
  $query = new WP_Query( array(
    'post_type'      => 'equipe',
    'posts_per_page' => -1,
    'meta_query'     => array(
      array(
        'key'     => 'selecione_tipo',
        'value'   => 'multidisciplinar',
        'compare' => '='
      )
    )
  ) );
  ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-corpo-clinico-pag">
    <div class="container">
      <div class="row">
        <?php while($query->have_posts()) {  $query->the_post(); ?>
        <div class="col-xxl-4">
          <div class="cada-clinico">
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="title">    
            <h2><?php the_title(); ?></h2>
            <p><?php the_field('especialidade_equipe'); ?></p>
            <p><?php the_field('crmrqe'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-verde">Ver mais</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
