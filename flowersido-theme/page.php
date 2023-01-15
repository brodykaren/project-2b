<?php get_header(); ?>
    <main class="container">
<?php
   if(have_posts()) {
        while (have_posts()) {
               the_post(); ?>

               <div class="single-post">
                   <div class="featured-image">
                        <?php the_post_thumbnail ('large'); ?>
                        <p><?php echo 'Post Written by: ' .get_the_author() .' | Published on: ' .get_the_date(); ?></p>
                           </div>

                           <div class="text-container">
                              
                            <h2><<?php the_title(); ?></h2>

                               
                            <p class="body-content"><?php the_content(); ?>


                           



                            </p>

                            </div>
                
                        </div>



                     <?php
         

                }

           }
      ?>

</main>

<?get_thefooter(); ?>
