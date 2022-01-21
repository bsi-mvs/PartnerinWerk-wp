<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('title'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    

    <!-- Bootstrap core CSS -->
<link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
<link href="<?php bloginfo('template_url') ?>/css/carousel.css" rel="stylesheet">
    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico"> -->
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <?php wp_head(); ?>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <style>
      .header-bg{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/Stadsfabriek-header.png'); ?>) no-repeat center center;
      }
    </style>
  </head>
  <body>
    
    <header>
        <nav class="navbar navbar-expand-md navbar-dark navbar-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Carousel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
        <div class="container">
            <div class="blog-header">
                <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
                <p class="lead blog-description"> </p>
                </div>
            <section class="header-bg">
                <div class="container">
                    <img src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/Stadsfabriek-logo-diap.png'); ?>" alt="Stadsfabriek Alkmaar" />
                    <h1><?php echo get_theme_mod('showcase_heading', 'test')?></h1>
                    <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
                    <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
                </div>
            </section>
        </div>

      </header>