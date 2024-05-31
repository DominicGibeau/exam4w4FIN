
<?php get_header(); ?>

<div id="singleDIV" class="global">
    <section>
       
        <div class="cours">
        <?php
        /*
            if (have_posts()){
                while(have_posts()){
                    the_post();
                    the_title('<h3>','</h3>');
                    echo wp_trim_words(get_the_content(),30);

                }
            }
        */
     if (have_posts()): the_post();?>
           
                      <div class="carte">
                <h3><?php the_title() ?></h3>  
                <p><?php the_content(); ?> </p>
<a href="<?php the_permalink(); ?>">Lire la suite</a>
<p>Température minimum : <?php the_field('temperature_minimum');?> </p>
<p>Température maximum : <?php the_field('temperature_maximum');?> </p>
<p>Ville avoisinante : <?php the_field('ville_avoisinante');?> </p>
            </div> 
 
        <?php endif; ?>
        </div>
    </section>
</div>

<div id="galerie" class="global">
    <section>
        <h2>Galerie</h2>
    </section>


<?php  get_template_part('gabarits/vague'); ?>
</div>
<?php get_footer(); ?>


