<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title and slogan display -->
  <title><?= bloginfo('name');?> - <?= bloginfo('description')?></title>
  <meta name="description" content=" Bienvenue chez Pix'ailes, l'agence web suisse qui fait décoller 
  vos projets!">
  <meta name="keywords" content="création de site internet, hébergement, logos, flyers, catalogues, 
  cartes de visite, menu de restaurant, hébergement, traduction.">
  <meta name="author" content="Camille Barbone">
  <meta name="copyright" content="Camille Barbone">
  <meta name="robots" content="index, follow">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
  integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/d69db61c7b.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="<?= get_stylesheet_uri()?>">

  <!-- Logo tab navigation -->
  <link rel="icon" type="image/png" href="" />
</head>

<body>
  <div class="container-fluid containerglobal">
      <nav class="navbar-web text-center fixed-top">
            <ul class="navbar-nav-web text-uppercase ">
                <?php
                    wp_nav_menu( array(
                    'container' =>'false',
                    'theme_location' => 'menuheader1',
                    'menu_id' => '',
                    'echo' => true,
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 0,
                    'items_wrap' => '%3$s',
                    'walker' => '')
                    );
                  ?>
                  
                   <a href="#" class="navbar-brand"><?= the_custom_logo(); ?></a> 
            
                <?php
                  wp_nav_menu( array(
                  'container' =>'false',
                  'theme_location' => 'menuheader2',
                  'menu_id' => '',
                  'echo' => true,
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'depth' => 0,
                  'items_wrap' => '%3$s',
                  'walker' => '')
                  );
                ?>
            </ul>
      </nav>
     
      <div class="mobile text-uppercase fixed-top">
        <a href="#" class="navbar-brand"><?= the_custom_logo(); ?></a> 
          <button class="toggle-collapse">
           <i class="fas fa-bars"></i>
          </button>
          <nav class="menu-mobile text-center">
            <ul class="ulmenu">
              <?php
                        wp_nav_menu( array(
                        'container' =>'false',
                        'theme_location' => 'menuheader1',
                        'menu_id' => '',
                        'echo' => true,
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'depth' => 0,
                        'items_wrap' => '%3$s',
                        'walker' => '')
                        );
                      ?>
                      
                    <?php
                      wp_nav_menu( array(
                      'container' =>'false',
                      'theme_location' => 'menuheader2',
                      'menu_id' => '',
                      'echo' => true,
                      'before' => '',
                      'after' => '',
                      'link_before' => '',
                      'link_after' => '',
                      'depth' => 0,
                      'items_wrap' => '%3$s',
                      'walker' => '')
                      );
                    ?>
            </ul>
          </nav>
          
      </div>
     
     
