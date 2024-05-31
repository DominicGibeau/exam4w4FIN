
<?php get_header(); ?>


<div id="entete" class="global">
    <section class="entete__header">
       
        <h2><?php echo get_bloginfo("name"); ?></h2>
        <h3><?php echo get_bloginfo("description"); ?></h3>
      


        <button>
            <a href="https://gftnth00.mywhc.ca/tim15/conference/">Événements</a>
        </button>
    
        <div class="logo">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-suse"></i>
        <i class="fa-brands fa-trello"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
    </div>
       

    </section>
<?php get_template_part("gabarits/vague"); ?>
</div>

<!--
<div id="ptiAvion">
<img src="img/petitAvion.png" alt="">
</div>
-->

<div id="accueil" class="global">
    <section>
        <h2>Destination populaire</h2>
        <div class="cours">
        <?php if (have_posts()):
            while(have_posts()): the_post(); ?>


 


 <?php

 $ma_carte = "carte";
 
if(in_category('galerie')){

$ma_carte = "galerie";

}

get_template_part("gabarits/categorie", $ma_carte);
?>



           <?php endwhile; ?>
        <?php endif; ?>




        
        </div>
    </section>
</div>
<div class="cours">
<?php
// Récupérer les catégories de WordPress
$categories = get_categories();

// Boucle à travers chaque catégorie
foreach ($categories as $category) {
    // Récupérer le titre de la catégorie
    $cat_title = $category->name;

    // Récupérer la description de la catégorie
    $cat_description = $category->description;

    // Limiter la description à 10 mots
    $cat_description_short = implode(' ', array_slice(explode(' ', $cat_description), 0, 10));

    // Récupérer le lien vers la liste des articles de cette catégorie
    $cat_link = get_category_link($category->cat_ID);
if($cat_title == "Pays"){
    $cat_link = get_category_link($category->pays);
}
    // Récupérer le nombre d'articles dans cette catégorie
    $cat_post_count = $category->count;
    ?>

    <div class="carte">
        <h2><?php echo $cat_title; ?></h2>
        <p><?php echo $cat_description_short; ?>...</p>
        <a href="<?php echo $cat_link; ?>">Voir les destinations</a>
        <p>Nombre d'articles : <?php echo $cat_post_count; ?></p>
    </div>

<?php } ?>
</div>


<!--

<div id="evenement"  class="global" >



    <section>
        <h2>Événement</h2>

        <?php
// Appel du shortcode directement dans le fichier front-page.php
//echo do_shortcode('[em_destination]');
?>

    </section>
 

</div>

-->


<div id="galerie" class="global">
    <section>
        <h2>les destination par catégories</h2>
<div id="lesDestinations">
        <?php
// Appel du shortcode directement dans le fichier front-page.php
echo do_shortcode('[em_destination]');
?>
</div>
        <article class="flexbox"> 
 
<?php 
/*
$categories = get_categories();


foreach($categories as $elm_categorie){

    $nom = $elm_categorie->names;
    $description =wp_trim_words($elm_categorie->description, 10);
    $nombre_destination = $elm_categorie->count;
    $categorie_url = get_category_link($elm_categorie->term_id);
    ?>

<div class="carte">
<h3> <?php echo $nom;?> </h3>
<p> <?php echo $cat_description;?> </p>
<p> Nombre de destination: <?php echo $nombre_destination;?> </p>
<a href="<?php $categorie_url ?>"> voir la destination  </a>
</div>

    <?php 
}
*/
?>

</article>

    </section>
<?php  get_template_part('gabarits/vague'); ?>
</div>
<div id="footer" class="global">

<?php get_footer(); ?>