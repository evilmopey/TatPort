<?php
  

    
  
wp_enqueue_script('jQuery','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', NULL, NULL, true);


function tatport_files() {
    wp_enqueue_style('tatport_styles', get_stylesheet_uri());
    wp_enqueue_script('index-js', get_theme_file_uri('/js/index.js'), NULL, NULL, true);
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',NULL, NULL, true);
    wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', NULL, NULL, true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_localize_script('index-js' , 'siteURL', array(
        'siteURL' => get_site_url(),
        'ajax' => admin_url('admin-ajax.php')));
   
    
      
};

add_action('wp_enqueue_scripts','tatport_files');




function tatport_title() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
};


add_action('after_setup_theme','tatport_title');


function server_side_ajax() {
    if (isset($_REQUEST) ) {
        $clicked = $_REQUEST['input'];
        
    };


    $html = '';

    if($clicked =='ronin'){
           $args = array('ink','sketches');
        
    };

    if($clicked =='ink'){
        $args = array('ink');
    };

    if($clicked =='drawings'){
        $args = array('sketches');
    };

    $wpq = new WP_Query(array(
        'post_per_page' => -1,
        'post_type' => $args
    ));

    if($wpq -> have_posts( )):
        while($wpq -> have_posts( )):
            $html .= ' 
            <div class="post">
                    <a href="<?php the_permalink(); ?>">
                    <img class="images"  src="<?php the_post_thumbnail_url($size = "medium") ?>" alt="">
                    <p class="title"><?php the_title() ?></p>
                    </a>   
            </div>';
        endwhile;
         echo wp_json_encode($html);
    endif;
        
        

  
};

add_action('wp_ajax_server_side_ajax', 'server_side_ajax');
add_action('wp_ajax_nopriv_server_side_ajax', 'server_side_ajax'); 


?>