<?php get_header(); ?>
    <div class="row">
        <div class="container">
           <main class="col-md-12">
<?php
   if(have_posts()) {
        while (have_posts()) {
               the_post(); ?>

               <div class="individual-post">
                   <div class="featured-image">
                        <?php the_post_thumbnail ('large'); ?>
                           </div><!--featured-image-->

                           <div class="text-container">
                              <h2><a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2>
                              <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                          
                            </div><!--text-conatiner -->
                
                        </div><!--individual-post-->



                     <?php
         

                }//end while
                //pagination
                flowersidopagination();

           }
      ?>

          </main><!--container-->

<?php get_footer(); ?>
