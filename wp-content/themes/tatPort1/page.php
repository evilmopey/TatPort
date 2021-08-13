<?php 
get_header();
?>

<h1><?php the_title() ?></h1>
<img src="<?php echo get_theme_file_uri();?>/img/screenshot.png" alt="">
<div class="content">
<?php the_content() ?>
</div>
<?php    
get_footer();   
?>


<!-- needs php echo site_url('/page-name') this will produce the websites address no args will go to the home page
needs php the_title() if (wp_get_post_parent_id(echo get_the_ID())) {
    <H1 BreadCrumb menu </h1>
}
echo wp_get_post_parent_id(echo get_the_ID())

echo get_the_title(echo wp_get_post_parent_id(echo get_the_ID()));

echo get_permalink(echo wp_get_post_parent_id(echo get_the_ID()))

<ul>
wp_list_pages(array(
    'title_li' => null,
    'child_of' => echo wp_get_post_parent_id(echo get_the_ID()),
    'sort_column' => 'menu_order'
))
</ul>

$example = array(
    'key' => 'value',

)

-----dynamic generated nav-------

wp_nav_menu(array(
    'them_location => 'headerMenuLocation'
));
 -->