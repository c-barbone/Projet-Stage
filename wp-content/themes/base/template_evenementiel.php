<?php /* Template Name: page Evènementiel */ ?>

<?php get_header(); ?>

<div class="container-fluid">
            <div class="col-12 d-flex justify-content-center">
                <?php $titreevenementiel = get_field("titre_page_evenementiel");
                    echo'<h2 class="titrepage">'.$titreevenementiel.'</h2>';
                ?>
            </div>
                <?php $blockevenementiel = get_field("block_evenementiel");
                for ($i=0; $i < count($blockevenementiel); $i++){
                    echo'<div class="row imgevenementiel justify-content-center align-items-center"><img class="img-fluid imgtest" src="'.$blockevenementiel[$i]["img_evenementiel"].'" alt=""><h3 class="titreevenementiel">'.$blockevenementiel[$i]["titre_evenementiel"].'</h3></div>
                    <p>'.$blockevenementiel[$i]["texte_evenementiel"].'</p>';
                    } 
                ?>
</div>

<?php get_footer(); ?>