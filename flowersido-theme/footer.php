<footer>
      <div class="container">
          <div class="row">
             <div class="col-md-4">
             <?php 

             if(has_nav_menu ('footer-left')){ ?>

                <nav class="footer-menu">
                    <?php
                      wp_nav_menu(array(
                        'theme_location' => 'footer-left'

                      ));
                      ?>

                            </nav><!footer-menu>

                          <?php } else{
                         echo "<p> Please select main menu through the dashboard </p>";

                    } ?> 
                    </div><!col-md-4>
                    
                  <div class="col-md-4" >
                  <?php 

                     if(has_nav_menu ('footer-middle')){ ?>

                  <nav class="footer-menu">
                  <?php
                    wp_nav_menu(array(
                    'theme_location' => 'footer-middle'
      
                      ));
                     ?>

               </nav>

             <?php } else{
            echo "<p> Please select main menu through the dashboard </p>";

       } ?> 
                    <div class="col-md-4">
                    <?php
                        dynamic_sidebar('right-footer-widget');
                        ?>
   
                     </div> <!col-md-4 > 
                  </div><!row >   
                </div><!container>  
             </footer>     
            <?php wp_footer(); ?>
          </body>  
      </html>  