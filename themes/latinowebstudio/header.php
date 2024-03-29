<?php
echo '<!DOCTYPE html>';
echo '<html ';
language_attributes();
echo '>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

echo codeHeader();

wp_head(); 

echo '</head>';
echo '<body '; 
body_class(); 
echo '>';
echo codeBody();

echo '<div class="blank-space"></div>';
echo '<header class="position-relative box-shadow bg-accent w-100" style="top:0;left:0;z-index:10;">';

echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row align-items-center">';

echo '<div class="col-4 col-3 text-center">';

echo '<a href="' . home_url() . '">';
echo '<div style="width:125px;">';
echo logoSVG();
echo '</div>';
echo '</a>';
echo '</div>';

// echo '<div class="col-1 mobile-hidden"></div>';

echo '<div class="col-8 text-center">';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0 d-flex justify-content-end'
    )); 

echo '</div>';
// echo '<div class="col-lg-3 col-6 text-center">';

// echo get_search_form();

// echo '</div>';

// echo '<div class="col-lg-3 col-md-2 col-3 desktop-hidden">';
// echo '<a id="navToggle" class="nav-toggle">';
// echo '<div>';
// echo '<div class="line-1 bg-accent-secondary"></div>';
// echo '<div class="line-2 bg-accent-secondary"></div>';
// echo '<div class="line-3 bg-accent-secondary"></div>';
// echo '</div>';
// echo '</a>';
// echo '</div>';

// echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
// echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-accent desktop-hidden" id="navItems">';

// echo '<div class="pt-5 pb-5">';
// echo '<div class="close-menu">';
// echo '<div>';
// echo '<span id="navMenuClose" class="close h2 text-white" style="float:right;">X</span>';
// echo '</div>';
// echo '</div>';
// echo '<a href="' . home_url() . '">';
// echo logoSVG();
// echo '</a>';
// echo '</div>';
// wp_nav_menu(array(
// 'menu' => 'primary',
// 'menu_class'=>'menu list-unstyled mb-0'
// )); 
// echo '</div>'; // end of col for navigation



echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

echo '<section class="hero position-relative">';
// $globalPlaceholderImg = get_field('global_placeholder_image','options');
if(is_page()){
if(has_post_thumbnail()){
    the_post_thumbnail('full', array(
        'class' => 'w-100 h-100 bg-img position-absolute'
    ));
} 

}


// if(is_front_page()) {
// echo '<div class="pt-5 pb-5 text-white text-center">';
// echo '<div class="position-relative">';
// echo '<div class="multiply overlay position-absolute w-100 h-100 bg-img"></div>';
// echo '<div class="position-relative">';
// echo '<div class="container">';
// echo '<div class="row">';
// echo '<div class="col-12">';
// echo '<h1 class="pt-3 pb-3 mb-0">' . get_the_title() . '</h1>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }



// if(!is_front_page()) {
// echo '<div class="container pt-5 pb-5 text-white text-center">';
// echo '<div class="row">';
// echo '<div class="col-md-12">';
// if(is_page() || !is_front_page()){
// echo '<h1 class="">' . get_the_title() . '</h1>';
// } elseif(is_single()){
// echo '<h1 class="">' . single_post_title() . '</h1>';
// } elseif(is_author()){
// echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// } elseif(is_tag()){
// echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// } elseif(is_category()){
// echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// } elseif(is_archive()){
// echo '<h1 class="">' . get_archive_title() . '</h1>';
// }
// elseif(!is_front_page() && is_home()){
// echo '<h1 class="">' . get_the_title(133) . '</h1>';
// }
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }

echo '</section>';
?>