
<?php get_header(); ?>

<div id="accueil" class="global">
    <section>
        <h2>destination d'une catégorie:</h2>
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



<div id="footer" class="global">

<?php get_footer(); ?>