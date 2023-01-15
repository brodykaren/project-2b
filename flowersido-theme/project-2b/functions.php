<?php

/*====================================
Add stylesheets and javascripts files
====================================*/

function custom_theme_scripts() {

// boostrap CSS
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri () . '/css/bootstrap.min.css');

// Main CSS\
wp_enqueue_style ('main-styles', get_stylesheet_directory_uri() . '/style.css');

wp_enqueue_script ('jquery');

//Javascript Files
wp_enqueue_script('bootstrap-js',get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js');
//wp_enqueue_script('custom-js', get_stylesheet_directory_uri(). '/js/scripts.js');
}

add_action('wp_enqueue_scripts','custom_theme_scripts');

/*===================================
custom header image
===================================*/


$custom_image_header = array(
      'width' => 520,
      'height'=> 150,
      'uploads' => true


);

/*featured <images--------*/


add_theme_support('custom-header', $custom_image_header);

add_theme_support('post-thumbnails');

add_theme_support('custom-logo');



/* Post Data Information */


function post_data () {
  $archieve_year = get_the_time ('Y');
  $archieve_month =get_the_time('m');
  $archieve_day =get_the_time ('d');
}


  /* 
   * This shouldnt be in this file but maybe the single.php file because this is authoer/ publish date info to be display
   * 
   * <p>written by:  <a href= "<?php echo get_author_posts_url(get_the_author_meta ('ID')); ?>"> <?php
   echo get_the_author(); ?></a>| Published on: < a href= " <?php echo get_the_day_link ($archieve_year,$archieve_month,$archieve_day); ?> "<?php echo "$archieve_month/$archieve_day/$archieve_year"; ?> </a></p>
   */
   


/* Add menus to our theme*/

function register_my_menus() {
	register_nav_menus(array (
		'main-menu' => ('Main Menu'),
		'footer-left' => ('Left Footer Menu'),
		'footer-middle' => ('Middle Footer Menu'),
		'footer-right' => ('Right Footer Menu')
	));
}

add_action('init', 'register_my_menus');


/* Pagination Links*/
function flowersidopagination(){
 global $wp_query;

 $big =999999999; //need an unlikely integer
 $translated =__('page','mytextdomain'); //supply translatable string

 echo paginate_links(array (

     'base' => str_replace( $big, '%#%', esc_url (get_pagenum_link ($big))),
     'format'=> '?paged=%#%',
     'current'=> max (1,get_query_var ('paged')),
     'total' => $wp_query->max_num_pages,
     'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'


 ));
}
					   
add_action ('init', 'flowersidopagination');

/* Creating Widget Areas */
function blank_widgets_init(){
  register_sidebar(array(
   'name'          => ('Right Footer Widget'),
   'id'            => 'right-footer-widget',
   'description'   => 'Area in right footer for content',
   'before_widget' => '<div class= "right-footer-widget-container">',
   'after_widget'  => '</div>', 
   'before_title'  => '<h2>',
   'before_title'  =>  '</h2>'
  ));
}

add_action('widgets_init','blank_widgets_init');

?>