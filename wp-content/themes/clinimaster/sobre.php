<?php get_header(); the_post();  //Template Name: Sobre ?>

<main class="principal">
      
  <section class="sec-sobre">
    <div class="container">
      <h1 class="tit-verde"><?php the_title(); ?></h1>
      <div class="content-texto-sobre">
        <div class="row align-items-center">
          <div class="col-lg-6 text-center">
            <img data-src="<?php the_post_thumbnail_url(); ?>" class="img-fluid lazy-image" alt="<?php the_title(); ?>">
          </div>
          <div class="col-lg-6 padding-box-20">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-fotos">
    <div class="container">
      <div class="carousel-fotos" id="carousel-fotos">
        <?php if (get_field('imagem_1') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_1'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_2') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_2'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_3') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_3'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_4') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_4'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_5') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_5'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_6') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_6'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_7') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_7'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_8') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_8'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_9') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_9'); ?>"></div>
        </div>
        <?php } ?>
        <?php if (get_field('imagem_10') != NULL) { ?>
        <div>
          <div class="cada-foto-carousel"><img src="<?php echo get_field('imagem_10'); ?>"></div>
        </div>
        <?php } ?>
      </div>
      <p class="d-block text-center">Estrutura moderna, equipamentos de alta precisão e uma equipe preparada para cuidar da sua visão.</p>
    </div>
  </section>

  <section class="sec-missao-visao-valores">
    <div class="container">
      <?php echo acf_esc_html(get_field('texto_mvv')); ?>
      <div class="content-carousel-missao">
        <div class="carousel-missao" id="carousel-missao">
          <div>
            <h3 class="icons-sec-missao icon-missao">Missão</h3>
             <p><?php the_field('missao'); ?></p>
          </div>
          <div>
            <h3 class="icons-sec-missao icon-visao">Visão</h3>
            <p><?php the_field('visao'); ?></p>
          </div>
          <div>
            <h3 class="icons-sec-missao icon-valores">Valores</h3>
            <p><?php the_field('valores'); ?></p>
          </div>
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

  

  <section class="sec-cta-home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <?php echo acf_esc_html(get_field('texto_cta_1')); ?>
          <div class="text-center d-block"><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">Agende sua consulta agora</a></div>
        </div>
      </div>
    </div>
  </section>
  

</main>

<?php get_footer(); ?>
