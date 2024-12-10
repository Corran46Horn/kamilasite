<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="?php echo get_template_directory_uri(); ?>/css/main.min.css" />
    <script src="?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
  </head>
  <body>
    <nav id="nav">
      <div class="container nav-container">
        <div class="row">
          <div class="col col-12">
            <div class="diverity-wrap"></div>
          </div>
          <div class="col col-2">
            <div class="name-wrap">
              <p class="title">MMUE</p>
              <p class="subtitle">Muzea <br />migracji w UE</p>
            </div>
          </div>
          <div class="col col-10">
            <?php wp_nav_menu(array(
              'theme_location' => 'main',
              'menu_class' => 'menu d-none d-md-flex',
              'container' => '',
            )); ?>
            <div
              class="hamburger hamburger--spin d-inline-block d-md-none"
              type="button"
            >
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div id="mySidenav" class="sidenav d-block d-md-none">
        <div class="hamburger hamburger--spin" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </div>
        <div class="menu-bg-wrap">
          <?php wp_nav_menu(array(
            'theme_location' => 'main',
            'menu_class' => 'mobile-menu',
            'container' => '',
          )); ?>
        </div>
      </div>
    </nav>