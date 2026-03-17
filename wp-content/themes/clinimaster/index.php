<?php get_header(); the_post();  //Template Name: Home ?>

<main class="principal">
  
  <section class="sec-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <?php the_content(); ?>
          <a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">Agendar consulta</a>
        </div>
        <div class="col-lg-6">
          <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
        </div>
      </div>
    </div>
  </section>

  <section class="sec-clinica-home">
    <div class="container">
      <h2 class="subtit-verde"><?php the_field('titulo_clinica_home'); ?></h2>
      <div class="row align-items-center align-items-stretch">
        <div class="col-xl-6">
          <img src="<?php the_field('imagem_clinica_home'); ?>" alt="<?php the_field('titulo_clinica_home'); ?>" class="img-fluid">
        </div>
        <div class="col-xl-6 d-flex align-items-center">
          <div class="content-clinica-home">
            <?php echo acf_esc_html(get_field('texto_clinica_home')); ?>
          </div>
        </div>
      </div>
      <div class="d-block text-center"><a href="<?php bloginfo('url'); ?>/sobre" class="btn-verde">Conheça a Clinimaster</a></div>
    </div>
  </section>

  <section class="sec-acesso-rapido-home">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="cada-acesso-rapido-home">
            <img src="<?php bloginfo('template_directory') ?>/images/icon-agendamento.svg" alt="Agendamento online">
            <h3>Agendamento online</h3>
            <p>Agende sua consulta com rapidez, segurança e conforto.</p>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">acessar agora</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cada-acesso-rapido-home">
            <img src="<?php bloginfo('template_directory') ?>/images/icon-especalidades.svg" alt="Agendamento online">
            <h3>Especialidades</h3>
            <p>Cuidado especializado com a sua saúde</p>
            <a href="<?php bloginfo('url'); ?>/especialidades" class="btn-verde">acessar agora</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cada-acesso-rapido-home">
            <img src="<?php bloginfo('template_directory') ?>/images/icon-convenios.svg" alt="Convênios">
            <h3>Convênios</h3>
            <p>Facilidade no acesso ao cuidado com a sua visão.</p>
            <a href="<?php bloginfo('url'); ?>/convenios" class="btn-verde">acessar agora</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-cta-home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <?php echo acf_esc_html(get_field('texto_cta_1')); ?>
          <div class="text-center d-block"><a href="<?php bloginfo('url'); ?>/corpo-clinico" class="btn-verde">Ver mais</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-exames-home">
    <div class="container">
      <h2 class="subtit-branco text-uppercase">Seu cuidado começa aqui</h2>
      <p>Cuidar da sua visão com segurança começa com um atendimento especializado, onde cada detalhe é pensado para oferecer tranquilidade, confiança e cuidado humano.</p>
      <div class="row lista-exames-home">
        
        <?php $query = new WP_Query( array( 'post_type' => 'exame' , 'posts_per_page' => 6 ) ); ?>
        <?php if($query->have_posts()) { ?> 
        <div class="col-lg-6">
          <h3>Exames oftalmológicos</h3>
          <div class="accordion accordion-servicos" id="accordionServicos">
            <?php $i=0; while($query->have_posts()) {  $query->the_post(); ?>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servico<?php echo $i; ?>">
                  <?php the_title(); ?>
                </button>
              </h2>
              <div id="servico<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionServicos">
                <div class="accordion-body">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
            <?php $i++; } ?>
          </div>
          <div class="text-center d-block"><a href="<?php bloginfo('url'); ?>/exames" class="btn-amarelo">Ver todos</a></div>
        </div>
        <?php } wp_reset_postdata(); ?>

        <?php $query = new WP_Query( array( 'post_type' => 'cirurgia' , 'posts_per_page' => 6 ) ); ?>
        <?php if($query->have_posts()) { ?> 
        <div class="col-lg-6">
          <h3>Cirurgias oftalmológicas</h3>
          <div class="accordion accordion-servicos" id="accordionCirurgias">
            <?php $i=0; while($query->have_posts()) {  $query->the_post(); ?>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cirurgia<?php echo $i; ?>">
                  <?php the_title(); ?>
                </button>
              </h2>
              <div id="cirurgia<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionCirurgias">
                <div class="accordion-body">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
            <?php $i++; } ?>
          </div>
          <div class="text-center d-block"><a href="<?php bloginfo('url'); ?>/cirurgias" class="btn-amarelo">Ver todos</a></div>
        </div>
        <?php } wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

  <section class="sec-cta-home">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <?php echo acf_esc_html(get_field('texto_cta_2')); ?>
          <div class="text-center d-block"><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo RemoveSpecialChar(get_option('whatsapp')); ?>&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." class="btn-verde">Agendar exame</a></div>
        </div>
      </div>
    </div>
  </section>

  <?php $query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => 6 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-blog-home">
    <div class="container">
      <h2 class="subtit-verde">Informação de qualidade para decisões mais seguras sobre sua visão e saúde</h2>
      <p>Conteúdos escritos por especialistas para orientar, prevenir e cuidar do seu bem-estar.</p>
      <div class="carousel-blog" id="carousel-blog">
        <?php while($query->have_posts()) {  $query->the_post(); ?>  
        <div>
          <div class="cada-post-blog">
            <div class="img-post" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
            <div class="cada-post-content">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="d-block text-center"><a href="<?php bloginfo('url'); ?>/blog" class="btn-verde">VER TODOS</a></div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <?php $query = new WP_Query( array( 'post_type' => 'depoimento' , 'posts_per_page' => 6 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-depoimentos-home">
    <div class="container">
      <h2 class="subtit-verde">Quem cuida da visão com a Clinimaster, recomenda: avaliações vindas do Google!</h2>
      <p>A confiança dos nossos pacientes é reflexo de um atendimento humano, ético e comprometido com resultados reais.</p>
      <div class="carousel-depoimentos" id="carousel-depoimentos">
        <?php while($query->have_posts()) {  $query->the_post(); ?> 
        <div>
          <div class="cada-depoimento-content">
            <div class="content-autor-depoimento">
              <div class="img-autor"><?php echo mb_substr(get_the_title(), 0, 1); ?></div>
              <div class="content-autor-nome">
                <h3><?php the_title(); ?></h3>
                <img src="<?php bloginfo('template_directory') ?>/images/icon-rating.svg" alt="5 estrelas">
              </div>
            </div>
            <?php the_content(); ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

  <?php $query = new WP_Query( array( 'post_type' => 'unidade' , 'posts_per_page' => 6 ) ); ?>
  <?php if($query->have_posts()) { ?> 
  <section class="sec-unidades-home">
    <div class="container">
      <h2 class="subtit-verde">Encontre a Clinimaster com facilidade</h2>
      <p>Sua consulta começa com praticidade. Veja no mapa a localização da Clinimaster e escolha a melhor rota para chegar com tranquilidade.</p>
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
