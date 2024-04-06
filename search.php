
<?php get_header(); ?>


<div id="entete" class="global">
    <section class="entete__header">
       
        <h2><?php echo get_bloginfo("name"); ?></h2>
        <h3><?php echo get_bloginfo("description"); ?></h3>
        <button>Événements</button>
    </section>
<?php get_template_part("gabarits/vague"); ?>
</div>
<div id="accueil" class="global">
    <section>
        <h2>recherche :<?= get_search_query() ?> </h2>
        <div class="cours">
        <?php if (have_posts()):
            while(have_posts()): the_post(); ?>

            <div class="carte">

                <h3><?php the_title(); ?></h3>  

                <p><?php echo wp_trim_words(get_the_content(),10); ?> </p>
                
             <a href="<?php the_permalink(); ?>" >Suite</a>
            </div> 
           <?php endwhile; ?>
        <?php endif; ?>




        
        </div>
    </section>
</div>


<div id="evenement" class="global diagonal">



    <section>
        <h2>Événement</h2>
    </section>
</div>
<div id="galerie" class="global">
    <section>
        <h2>les destination par catégories</h2>


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
