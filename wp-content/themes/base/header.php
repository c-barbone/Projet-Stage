<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=" Bienvenue dans notre Agence web éco fiendly">

  <!-- Title and slogan display -->
  <title><?= bloginfo('name');?> - <?= bloginfo('description')?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/d69db61c7b.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="<?= get_stylesheet_uri()?>">

  <!-- Logo tab navigation -->
  <link rel="icon" type="image/png" href="" />
</head>

<body>
  <div class="container-fluid containerglobal">
    <div class="">
      <nav class="navbar navbar-expand-lg d-flex justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="col-6">
          <?php
              wp_nav_menu( array(
              'container' =>'nav',
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
        </ul>
            <div class="col-1 d-flex justify-content-center">
              <a class="navbar-brand" href="#"><?= the_custom_logo(); ?></a>
            </div>
        <ul class="col">
          <?php
            wp_nav_menu( array(
            'container' =>'nav',
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
