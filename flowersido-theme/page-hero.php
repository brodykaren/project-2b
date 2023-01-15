<?php
/*Template name: hero image
template post type: page
*/

get_header();

if(have_posts()) {
the_post(); ?>
<div class="hero-container">
    <div class="hero-image">
        <?php the_post_thumbail('full'); ?>
     </div>

     <div class="hero-title conatiner">
        <?php the_tittle(); ?>
     </div> 
  </div>

  <div class="container">
     <div class="row">
        <main class="col-md-9">
            <section>
                <?php the_content(); ?>
            </section>
        </main>

        <aside class="col-md-3">
            <?php get_sidebar(); ?>
        </aside>
    </div>
 </div>
<?php}
  }

get_footer(); ?>