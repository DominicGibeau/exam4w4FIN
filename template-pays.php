<?php
/**
 * Template name: Pays
 *
 */
?>


<?php get_header(); ?>

<div id="lePremierPays">

<main class="site__main2">


   
<?php

if ( have_posts() ) : the_post(); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>






<?php endif;?>


</main> 

</div>



<div id="galerie" class="global">
    <section>
   
        <?php get_template_part("gabarits/vague"); ?>
        <?php // wp_nav_menu(array("menu" => "lesPays","container" => "nav")); ?>
        
        <?php
// Appel du shortcode directement dans le fichier front-page.php
echo do_shortcode('[em_destination]');
?>
    
</div>

<div id="laVagueQuiGosse">
<?php get_template_part("gabarits/vague"); ?>
</div>
        <article class="flexbox"> 
   




<?php





get_footer();