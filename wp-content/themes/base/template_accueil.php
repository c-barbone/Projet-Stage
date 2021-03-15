<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>
  <div class="container-fluid">
    <div class="row" style="height:100vh">

    </div>
    <div class="row">
      <?php $imgaccueil = get_field("img_accueil");
        echo'<img class="img-fluid imgaccueil" src="'.$imgaccueil.'"alt="">';
      ?>
    </div>
      <div class="row">
          <?php $blockinfos = get_field("block_infos");
            for ($i=0; $i < count($blockinfos); $i++){
              echo '<div class="col-lg-4 col-sm-12 blockinfos pt-3 text-center"><img class="logoblock" src="'.$blockinfos[$i]["logo_infos"].'" alt="...">
              <h3 class="titreinfos">'.$blockinfos[$i]["titre_infos"].'</h3>
              <p class="textinfos">'.$blockinfos[$i]["texte_infos"].'</p></div>';
            }
          ?>
      </div>   
      <div class="row blockinfos1">
          <?php $blockinfos1 = get_field("block_infos1");
            for ($i=0; $i < count($blockinfos1); $i++){
              echo '<div class="col-lg-6 col-sm-12 pt-3 text-center"><img class="logoblock" src="'.$blockinfos1[$i]["img_infos1"].'" alt="...">
              <h3 class="titreinfos1">'.$blockinfos1[$i]["titre_infos1"].'</h3>
              <p class="textinfos1">'.$blockinfos1[$i]["texte_infos1"].'</p></div>';
            }
          ?>
      </div> 
      <div class="row">
        <div class="col-12">
          <h3 class="titreslider text-center">Exemples de sites proposés par Pix'ailes</h3>
          <div style="height: 400px"></div>
        </div>
      </div>
  </div>
<?php get_footer(); ?>