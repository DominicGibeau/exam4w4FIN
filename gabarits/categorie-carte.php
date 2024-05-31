<?php
/**
* template pour creer des carte
*/
?>
<div class="carte">

            <?php the_post_thumbnail('thumbnail');?>

                <h3><?php the_title(); ?></h3>  

                <p><?php echo wp_trim_words(get_the_content(),10); ?> </p>
                
                <?php the_category(); ?>

             <a href="<?php the_permalink(); ?>" >Suite</a>


            </div> 