

<?php get_header(); ?>


        <div id="erreur_404" class="global">





          <div id="leTexteDerreur">
            
          <h2>erreur 404</h2>
        
          <p>vous essayer d'acceder a une page qui n'existe pas</p>
        
          <p>pour revenir a la page d'acceuil cliquer sur le lien suivant</p>


          <button>Événements</button>
          <?php  get_search_form(); ?>
          <div id="leMiniMenu">
              <?php wp_nav_menu(array("menu" => "principal","container" => "nav")); ?>
            </div>
        
    
        </div>
               
        <div id="lImage404">

   
      <img src="img/aucune idée.png" alt="">
      

<h4><?php echo get_bloginfo("name"); ?></h4>
<h5><?php echo get_bloginfo("url"); ?></h5>
</div>
</div>

        <div id="footer" class="global">

         

            <footer>
        
                <?php get_footer(); ?>
             
            </footer>


            <div class="vague">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill" style="fill: var(--couleur-arriere-galerie);"></path>
                </svg>
            </div>
            

        </div>
    </body>
</html>

