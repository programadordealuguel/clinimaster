<?php get_header(); the_post();  //Template Name: Blog ?>

<main class="principal">
      
  <section class="sec-tit-padrao">
    <div class="container">
      <h1 class="tit-verde"><?php the_title(); ?></h1>
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="menu-categorias">
            <?php
              $categories = get_categories( array(
                  'hide_empty' => true,
              ) );
              foreach ( $categories as $category ) {
                  echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
              }
              ?>
          </div>
          <form role="search" method="get" class="search-form" action="<?php bloginfo('url') ?>/">
              <input type="search" class="input-busca" placeholder="Buscar" value="" name="s">
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
    $posts_por_pagina = 3;
    $total_postagens = wp_count_posts()->publish;
    $total_paginas = ceil($total_postagens / $posts_por_pagina);
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'posts_per_page' => $posts_por_pagina,
        'paged' => $paged,
        'post_type' => 'post'
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
  ?>
  <section class="sec-lista-posts">
    <div class="container">
      <div class="row">
        <?php while ($query->have_posts()) { $query->the_post(); ?>
        <div class="col-md-4">
          <div class="img-post-interna" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <a href="#" class="link-cat">Catarata</a>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="btn-verde">Leia mais</a>
        </div>
        <?php } ?>
      </div>
      <?php 
        echo '<div class="pagination">';
        echo paginate_links(array(
          'total' => $total_paginas,
          'current' => $paged,
          'prev_text' => __('Anterior'),
          'next_text' => __('Próximo'),
        ));
        echo '</div>';
      ?>  
    </div>
  </section>
  <?php } wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
