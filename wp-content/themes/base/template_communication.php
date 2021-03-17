<?php /* Template Name: page Communication */ ?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <?php $titrecom = get_field("titre_com");
                echo'<h2 class="titrepagecom">'.$titrecom.'</h2>';
            ?>
        </div>
                <?php $blockcom = get_field("block_com");
                    for ($i=0; $i < count($blockcom); $i++){
                    echo '<div class="col-12 colcom"><h3 class="titresecondaire text-center">'.$blockcom[$i]["titres_com"].'</h3>
                    <p class="paragraphecom text-center mx-5">'.$blockcom[$i]["text_com"].'</p></div>'
                    ;
                }
                ?>
    </div>
</div>

<?php get_footer(); ?>