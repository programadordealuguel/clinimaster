<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet">    
  </head>
  <body>

    <header class="topo">
      <div class="container topo-desktop">
        <div class="row align-items-center">
          <div class="col-md-3">
            <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory') ?>/images/logo.svg" alt="Clinimaster" class="img-fluid logo"></a>
          </div>
          <div class="col-md-9">
            <nav class="menu">
              <a href="<?php bloginfo('url'); ?>/sobre">Institucional</a>
              <a href="<?php bloginfo('url'); ?>/corpo-clinico">Corpo Clínico</a>
              <a href="<?php bloginfo('url'); ?>/especialidades">Especialidades</a>
              <a href="<?php bloginfo('url'); ?>/cirurgias">Cirurgias</a>
              <a href="<?php bloginfo('url'); ?>/exames">Exames</a>
              <a href="<?php bloginfo('url'); ?>/convenios">Convênios</a>
              <a href="<?php bloginfo('url'); ?>/blog">Blog</a>
              <a href="<?php bloginfo('url'); ?>/contato">Contato</a>
            </nav>
          </div>
        </div>
      </div>
    </header>