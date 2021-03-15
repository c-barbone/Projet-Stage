<?php /* Template Name: page Créations visuelles */ ?>

<?php get_header(); ?>
    <div class="container-fluid">
            <div class="col-12 d-flex justify-content-center">
                <?php $titrecreav = get_field("titre_crea_v");
                    echo'<h2 class="titrepage">'.$titrecreav.'</h2>';
                ?>
            </div>
            <?php $blockcreav = get_field("page_crea_vis");
                for ($i=0; $i < count($blockcreav); $i++){
                    echo'<div class="row align-items-center testcol"><div class="col-lg-6 col-sm-12  d-flex justify-content-center"><img class="img-fluid" src="'.$blockcreav[$i]["img_crea_vis"].'" alt=""></div>
                    <div class="col-lg-6 col-sm-12"><h3 class="titrecrea text-center">'.$blockcreav[$i]["titre_crea_vis"].'</h3>
                    <p class="text-center paragraphecrea">'.$blockcreav[$i]["texte_crea_vis"].'</p></div></div>';
                    } 
                ?>
    </div>
  
<?php get_footer(); ?>