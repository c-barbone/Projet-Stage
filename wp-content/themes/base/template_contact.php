<?php /* Template Name: contact */ ?>

<?php get_header(); ?>
<div class="container-fluid containercontact">
    <div class="row justify-content-center">
        <?php $titrecontact = get_field("titre_contact");
            echo'<h2 class="titrepage">'.$titrecontact.'</h2>';
        ?>
    </div>
    <div class="row justify-content-center text-center">
        <?php $textcontact = get_field("text_contact");
            echo'<p class="textcontact">'.$textcontact.'</p>';
        ?>
    </div>
    <div class="row justify-content-center text-center contactmargin">
        <?php the_content(); ?>
    </div>

<div class="row rowcolor"></div>
    <div class="row">
        <?php $addressfooter = get_field("address");
                for ($i=0; $i < count($addressfooter); $i++){
                    echo'<div class="col-12 d-flex justify-content-center"><h5 class="titreaddress my-4">'.$addressfooter[$i]["titre_address"].'</h5></div>
                    <div class="col-12 d-flex justify-content-center textaddress"><a href="mailto:'.$addressfooter[$i]["mail_address"].'">'.$addressfooter[$i]["mail_address"].'</a></div>
                    <div class="col-12 d-flex justify-content-center text-center textaddress">'.$addressfooter[$i]["address"].'</div>
                    <div class="col-12 d-flex justify-content-center textaddress">'.$addressfooter[$i]["tel_address"].'</div>';
                }
            ?>
    </div>

        <?php $titrefooter = get_field("titre_footer");
            echo'<h4 class="titrefooter mt-5 text-center">'.$titrefooter.'</h4>';
        ?>
</div>
<?php get_footer(); ?>