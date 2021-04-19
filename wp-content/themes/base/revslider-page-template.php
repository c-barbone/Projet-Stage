<?php get_header(); ?>
<?php
/**
 * Template Name: Slider Revolution Blank Template child
 * Template Post Type: post, page
 * The template for displaying RevSlider on a blank page
 */
 
if(!defined('ABSPATH')) exit();
$page_bg = get_post_meta(get_the_ID(), 'rs_page_bg_color', true);
$page_bg = ($page_bg == '' || $page_bg == 'transparent') ? 'transparent' : $page_bg.";";
?>


<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
	<style type="text/css">
		body:before {
			display: none !important
		}

		body:after {
			display: none !important
		}

		body,
		body.page-template-revslider-page-template,
		body.page-template---publicviewsrevslider-page-template-php {
			background: <?php echo $page_bg;
			?>
		}
	</style>
</head>


<?php do_action('rs_page_template_pre_content'); ?>
<div>
	<?php
			// Start the loop.
			while(have_posts()) : the_post();

				// Include the page content template.
				if(!isset($revslider_is_preview_mode) || $revslider_is_preview_mode === false){
					the_content();
				}else{
					echo do_shortcode(get_the_content());
				}

			// End the loop.
			endwhile;
			?>
</div>
<?php do_action('rs_page_template_post_content'); ?>
<?php wp_footer(); ?>
<div class="container-fluid">
	<div class="row rowaccueil">
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
	<div class="row justify-content-center">
		<div class="col-12 text-center colslider">
			<?php
                $titreslider = get_field("titre_slider");
                echo '<h3 class="titreslider text-center">'.$titreslider.'</h3>'
            ?>
				<?php $slide = get_field("slider"); ?>
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?=$slide[0]["img_slider"]?>" class="img-fluid imgslider" alt="...">
				<div class="carousel-caption">
				<a href="<?=$slide[0]["lien_slider"]?>" target="_blank"><?=$slide[0]["titre_slider"]?></a>
				</div>
              </div>
              <?php
    
              for ($i=1; $i < count($slide); $i++){
                echo '<div class="carousel-item">
                <img src="'.$slide[$i]["img_slider"].'" class="img-fluid imgslider" alt="...">
				<div class="carousel-caption">
				<a href="'.$slide[$i]["lien_slider"].'" target="_blank">'.$slide[$i]["titre_slider"].'</a>
				</div>
                </div>';
              }
              ?>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <?php
    
              for ($i=1; $i < count($slide); $i++){
                echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'">';
              }
              ?>
            </ol>
          </div>
        </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
