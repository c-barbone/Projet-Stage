<?php /* Template Name: Site internet */ ?>

<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="titrepage">Site internet</h2>
            </div>
            <div class="col-lg-4 col-sm-12 text-center">
                <?php $lignechrono1 = get_field("ligne_chronologique1");
                    for ($i=0; $i < count($lignechrono1); $i++){
                    echo '<img class="logochrono1" src="'.$lignechrono1[$i]["logo_chrono1"].'" alt="...">
                    <h3 class="titresite">'.$lignechrono1[$i]["titre_chrono1"].'</h3>
                    <p>'.$lignechrono1[$i]["text_chrono1"].'</p>';
                }
                ?>
            </div>
                <div class="col-4 traitvertical">
                    <div class="trait1"></div>
                    <div class="trait2"></div>
                    <div class="trait3"></div>
                    <div class="trait4"></div>
                    <div class="trait5"></div>
                    <div class="trait6"></div>
                    <div class="trait7"></div>
                    <div class="trait8"></div>
                </div>
                <div class="col-lg-4 col-sm-12 text-center">
                <?php $lignechrono2 = get_field("ligne_chronologique2");
                    for ($i=0; $i < count($lignechrono2); $i++){
                    echo '<img class="logochrono2" src="'.$lignechrono2[$i]["logo_chrono2"].'" alt="...">
                    <h3 class="titresite">'.$lignechrono2[$i]["titre_chrono2"].'</h3>
                    <p>'.$lignechrono2[$i]["text_chrono2"].'</p>';
                }
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>