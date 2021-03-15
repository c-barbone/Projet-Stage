<?php /* Template Name: page Mention Légales */ ?>

<?php get_header(); ?>

    <div class="container-fluid">
        <div class="col-12 d-flex justify-content-center">
            <?php
                $titrementions = get_field("titre_mentions");
                echo '<h2 class="titrepage">'.$titrementions.'</h2>'
            ?>
        </div>
        <div class="container containerMentions">
            <div class="row ml-2 rowinfoM">
                <?php $pagementions = get_field("blockinfo_mentions");
                    for ($i=0; $i < count($pagementions); $i++){
                        echo'<div class="col-12 colmention">'.$pagementions[$i]["titre_infosmentions"].' '
                        .$pagementions[$i]["details_infosmentions"].'</div>';
                        } 
                ?>
            </div>
            <?php $pagementions1 = get_field("block_mentions");
                for ($i=0; $i < count($pagementions1); $i++){
                    echo'<div class="row ml-2 rowinfoM"><div class="col-12 colmention"><h3 class="titremention">'.$pagementions1[$i]["titre_mentions"].'</h3></div>
                    <p class="paragraphementions">'.$pagementions1[$i]["textmentions"].'</p></div>';
                    }
                     
            ?>
        </div>
    </div>
<?php get_footer(); ?>