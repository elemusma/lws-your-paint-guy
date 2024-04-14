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
echo '<header class="position-relative box-shadow bg-accent w-100 small" style="top:0;left:0;z-index:10;">';

echo '<div class="bg-white mobile-hidden" style="padding:5px 0px;">';
echo '<div class="container">';

echo '<div class="row align-items-center justify-content-center">';

echo '<div class="col-lg-4 col-6 d-flex align-items-center justify-content-center" style="border-right:1px solid var(--gray);">';

echo '<div style="border-radius:50%;height:20px;min-width:20px;margin-right:10px;" class="d-flex align-items-center justify-content-center">';
echo '<svg style="height:10px;" fill="var(--accent-primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>';
echo '</div>';

echo '<div>';
// echo '<p class="text-gray" style="margin:0;"><strong>Call</strong></p>';
echo '<a href="tel:+1' . phoneNumber() . '" class="">' . phoneNumber() . '</a>';
echo '</div>';

echo '</div>'; // end of col

echo '<div class="col-lg-4 col-12 d-flex align-items-center justify-content-center mobile-hidden" style="border-right:1px solid var(--gray);">';

echo '<div style="border-radius:50%;height:20px;min-width:20px;margin-right:10px;" class="bg-white d-flex align-items-center justify-content-center">';
echo '<svg style="height:10px;" fill="var(--accent-primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>';
echo '</div>';

echo '<div>';
// echo '<p class="text-gray" style="margin:0;"><strong>Email</strong></p>';
echo '<a href="mailto:' . emailAddress() . '" target="_blank" class="">' . emailAddress() . '</a>';
echo '</div>';

echo '</div>'; // end of col

echo '<div class="col-lg-4 col-12 d-flex align-items-center justify-content-center mobile-hidden" style="">';

echo '<div style="border-radius:50%;height:20px;min-width:20px;margin-right:10px;" class="bg-white d-flex align-items-center justify-content-center">';
echo '<svg style="height:10px;" fill="var(--accent-primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>';
echo '</div>';

echo '<div>';
// echo '<p class="text-gray" style="margin:0;"><strong>Address</strong></p>';
echo '<span style="line-height:1;display:inline-block;" class="">' . address() . '</span>';
echo '</div>';

echo '</div>'; // end of col

echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="nav">';
echo '<div class="container">';

echo '<div class="row align-items-center">';

echo '<div class="col-lg-1 col-3 text-center">';

echo '<a href="' . home_url() . '">';
echo '<div style="width:105px;max-width:105px;transition:all .5s ease-in-out;" id="logoMain">';
echo logoSVG();
echo '</div>';
echo '</a>';

echo '</div>';



echo '<div class="col-lg-3 col-md-2 col-3 desktop-hidden">';
echo '<a id="mobileMenuToggle" class="openModalBtn nav-toggle" data-modal-id="mobileMenu">';
echo '<div>';
echo '<div class="line-1 bg-accent-secondary"></div>';
echo '<div class="line-2 bg-accent-secondary"></div>';
echo '<div class="line-3 bg-accent-secondary"></div>';
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div class="col-lg-9 text-center mobile-hidden">';
    
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu text-white list-unstyled mb-0 d-flex justify-content-end'
)); 

echo '</div>'; // end of col

echo '<div class="col-lg-2 col-4">';
    echo do_shortcode('[button href="tel:+1' . phoneNumber() . '"]' . phoneNumber() . '[/button]');
    echo '</div>'; // end of col


// echo '<div class="col-lg-3 col-6 text-center">';

// echo get_search_form();

// echo '</div>';

// echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';


// <!-- The first Modal -->
echo '<div id="mobileMenu" class="modal mobile-menu">';
//   <!-- Modal content -->
echo '<div class="modal-content-menu modal-content">';
echo '<span class="close" id="navMenuClose">&times;</span>';

echo '<div style="width:100%;max-width:105px;">';
echo '<a href="' . home_url() . '">';
echo logoSVG();
echo '</a>';
echo '</div>';

wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu list-unstyled mb-0'
));

echo '<div class="d-flex align-items-center justify-content-start" style="">';

echo '<div style="border-radius:50%;height:40px;min-width:40px;margin-right:10px;" class="bg-white d-flex align-items-center justify-content-center">';
echo '<svg style="height:20px;" fill="var(--accent-primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>';
echo '</div>';

echo '<div>';
echo '<p class="text-gray" style="margin:0;"><strong>Email</strong></p>';
echo '<a href="mailto:' . emailAddress() . '" target="_blank" class="text-accent-secondary">' . emailAddress() . '</a>';
echo '</div>';

echo '</div>';

echo do_shortcode('[spacer style="height:25px;"]');

echo '<div class="d-flex align-items-center justify-content-center" style="">';

echo '<div style="border-radius:50%;height:40px;min-width:40px;margin-right:25px;" class="bg-white d-flex align-items-center justify-content-center">';
echo '<svg style="height:20px;" fill="var(--accent-primary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>';
echo '</div>';

echo '<div>';
echo '<p class="text-gray" style="margin:0;"><strong>Address</strong></p>';
echo '<span style="line-height:1;display:inline-block;">' . address() . '</span>';
echo '</div>';

echo '</div>';

echo do_shortcode('[spacer style="height:25px;"]');

echo do_shortcode('[button href="tel:+1' . phoneNumber() . '"]' . phoneNumber() . '[/button]');

echo '</div>';
echo '</div>';


// echo '<div class="col-lg-4 col-md-8 col-11 nav-items bg-accent desktop-hidden" id="navItems">';

// echo '<div class="" style="padding:50px 0px;">';
// echo '<div class="close-menu">';
// echo '<div>';
// echo '<span id="navMenuClose" class="close h2 text-white" style="float:right;">X</span>';
// echo '</div>';
// echo '</div>';



// echo '</div>';
// wp_nav_menu(array(
// 'menu' => 'primary',
// 'menu_class'=>'menu list-unstyled mb-0'
// )); 
// echo '</div>'; // end of col for navigation



echo '</div>';
echo '</div>';
echo '</div>';

// echo '<div class="bg-white mobile-hidden">';
// echo '<div class="container">';
//     echo '<div class="row">';
    

    
//     echo '</div>';
// echo '</div>';
// echo '</div>';

echo '</header>';

// echo '<section class="hero position-relative">';
// // $globalPlaceholderImg = get_field('global_placeholder_image','options');
// if(is_page()){
// if(has_post_thumbnail()){
//     the_post_thumbnail('full', array(
//         'class' => 'w-100 h-100 bg-img position-absolute'
//     ));
// } 

// }


// // if(is_front_page()) {
// // echo '<div class="pt-5 pb-5 text-white text-center">';
// // echo '<div class="position-relative">';
// // echo '<div class="multiply overlay position-absolute w-100 h-100 bg-img"></div>';
// // echo '<div class="position-relative">';
// // echo '<div class="container">';
// // echo '<div class="row">';
// // echo '<div class="col-12">';
// // echo '<h1 class="pt-3 pb-3 mb-0">' . get_the_title() . '</h1>';
// // echo '</div>';
// // echo '</div>';
// // echo '</div>';
// // echo '</div>';
// // echo '</div>';
// // echo '</div>';
// // }



// // if(!is_front_page()) {
// // echo '<div class="container pt-5 pb-5 text-white text-center">';
// // echo '<div class="row">';
// // echo '<div class="col-md-12">';
// // if(is_page() || !is_front_page()){
// // echo '<h1 class="">' . get_the_title() . '</h1>';
// // } elseif(is_single()){
// // echo '<h1 class="">' . single_post_title() . '</h1>';
// // } elseif(is_author()){
// // echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// // } elseif(is_tag()){
// // echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// // } elseif(is_category()){
// // echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// // } elseif(is_archive()){
// // echo '<h1 class="">' . get_archive_title() . '</h1>';
// // }
// // elseif(!is_front_page() && is_home()){
// // echo '<h1 class="">' . get_the_title(133) . '</h1>';
// // }
// // echo '</div>';
// // echo '</div>';
// // echo '</div>';
// // }

// echo '</section>';
?>