<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
   <head>
      <meta charset = " <?php bloginfo('charset');?> ">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title><?php bloginfo('name');?></title>

      <script src="https://kit.fontawesome.com/1c127f8e6d.js" crossorigin="anonymous"></script>
      <?php wp_head(); ?>
   </head>

   <body>
      <header>
          <div class= "container">
            <div class="row">
                <div class="text-center mt-6 logo-container">

                <?php

                 //display logo if its set, if not display site title
                  if (get_header_image()=='') { ?>
                  <h1><a href="<?php echo get_home_url(); ?>"> <?php bloginfo ('name'); ?> </a></h1>
                     
                    <?php
                    }else {?>
                       <a href ="<?php echo get_home_url(); ?> "> <img class="logo" src="<?php header_image(); ?>"
                      height =" <?php echo get_custom_header() ->height; ?> " width=" <?php echo get_custom_header() ->width; ?>" alt="Company Logo"/></a>
                       
                    <?php
                    }
                  ?>
       
               
                  </div>

            <div class="col-lg-10 col-md-offset-2 navigation">
				 <div class="nav">
                    <ul>
                       <?php 
						  wp_nav_menu(array(
							   'theme_location' => 'main-menu',

						   ) );

                  		?>
                        
                    </ul>
                </div>
			

            <nav class="custom-menu-class">
                

             </nav>

           </div> 
       </div> 
    </div> 
</header>

<?php get_search_form(); ?>