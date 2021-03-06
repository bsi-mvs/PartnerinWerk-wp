<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> -->
    <?php wp_head(); ?>
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/Stadsfabriek-header-big.png'); ?>) no-repeat;
        background-size: cover;        
      }
    </style>
  </head>
  <body>
  <!-- <div class="container main-body"></div> -->
  <header>
    <section class="showcase">
      <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar navbar-collapse navbar-expand-md navbar-light navbar-top bg-opacity-100 center',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
              </nav>
              <!-- <nav class="navbar navbar-expand-md navbar-light navbar-top bg-opacity-100">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Carousel</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HET CONCEPT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">FACILITEITEN STADSFABRIEK</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">FACILITEITEN STADSKANTOREN</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">GEVESTIGDE ORGANISATIES</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">AGENDA</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">IMPRESSIE</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">NIEUWS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">CONTACT</a>
                      </li>                
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav> -->
        </div>
      </div>

      <div class="showcase-overlay">
      <div class="container-sm header-column-logo" style="text-align: center;">
        <div class="row align-self-center" style="text-align: center;">
          <!-- <div class="col align-self-center"> -->
            <div class="col-md-4">
            </div>
            <div class="col-md-4 align-self-center" style="text-align: center; padding-left: 2vw;">
              <img class="header-logo" src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/Stadsfabriek-logo-diap-440.png'); ?>" />
              <!-- <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
              <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
              <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a> -->
            </div>
            <div class="col-md-4">
            </div>
          <!-- </div> -->
        </div>
      </div>
      <!-- nav elements-->

      <!-- Gradients -->
      <div class="container gradient-container">
        <div class="row">
            <div class="col-sm-1 gradient-blue">

            </div>
            <div class="col-sm-1 gradient-pink">
              
              </div>
              <div class="col-sm-1 gradient-yellow">
              
              </div>
              <div class="col-sm-1 gradient-black">
              
              </div>
              <div class="col-md-8">

              </div>
        </div>
      </div>
          <!-- First Carousel -->
    <div class="carousel">
      <div class="owl-carousel">
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
      </div>
    </div>
    </div>
  </section>
</header>
<main>
  <section class="boxes">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <?php if(is_active_sidebar('box1')) : ?>
              <?php dynamic_sidebar('box1'); ?>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <?php if(is_active_sidebar('box2')) : ?>
              <?php dynamic_sidebar('box2'); ?>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <?php if(is_active_sidebar('box3')) : ?>
              <?php dynamic_sidebar('box3'); ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col col-md-6">
          <div class="font-quicksand">
            Dit is Quicksand.
          </div>
          <div class="font-verdana">
              Dit is verdana.
          </div>
          <div class="font-impact">
              Dit is Impact.
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer(); ?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap/bootstrap.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script> 
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap/bootstrap.bundle.js" type="text/javascript" ></script>
    <script src="<?php bloginfo('template_url'); ?>/js/custom/owl.carousel.min.js" type="text/javascript" ></script>
    <script src="<?php bloginfo('template_url'); ?>/js/custom/carousel.js" type="text/javascript" ></script>
</body>
<script type="text/javascript">
      $(function() {        
        $('.nav').children(':last-child').removeClass("nav-item");
        $('.nav').children(':last-child').addClass("nav-item-last");
      }); 
 </script>
</html>
