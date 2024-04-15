<?php

echo '<footer>';
echo '<section class="bg-accent" style="padding-top:50px;padding-bottom:25px;">';
echo '<div class="container">';
// echo '<div class="row justify-content-center">';

// echo '<div class="col-lg-6 text-white" style="padding-bottom:50px;">';

// echo '</div>';
// echo '</div>';

echo '<div class="row justify-content-start">';

echo '<div class="col-lg-2 text-white text-center">';
echo '<a href="' . home_url() . '" style="display: inline-block;" title="Your Paint Guy Handyman in Merrimack & Southern Hampshire">';
echo '<div style="width:125px;pointer-events:none;">';
echo logoSVG();
echo '</div>';
echo '</a>';


echo '</div>';

echo '<div class="col-lg-7 text-white">';
echo '<strong>About</strong>';
echo '<p class="small" style="margin:0px;">' . companyAbout() . '</p>';
echo '</div>';

echo '<div class="col-lg-3 text-white">';
echo '<strong>Contact</strong>';
echo '<div class="d-flex align-items-start justify-content-start" style="">';

echo '<div style="border-radius:50%;height:20px;min-width:20px;margin-right:10px;" class="d-flex align-items-center justify-content-center bg-white">';
echo '<svg style="height:10px;" fill="var(--accent-secondary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>';
echo '</div>';

echo '<div>';
// echo '<p class="text-gray" style="margin:0;"><strong>Call</strong></p>';
echo '<a href="tel:+1' . phoneNumber() . '" class="" title="phone number link">' . phoneNumber() . '</a>';
echo '</div>';

echo '</div>'; // end of col

echo '<div class="d-flex align-items-start justify-content-start" style="padding-top:15px;">';

echo '<div style="border-radius:50%;height:20px;min-width:20px;margin-right:10px;" class="bg-white d-flex align-items-center justify-content-center">';
echo '<svg style="height:10px;" fill="var(--accent-secondary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>';
echo '</div>';

echo '<div>';
// echo '<p class="text-gray" style="margin:0;"><strong>Email</strong></p>';
echo '<a href="mailto:' . emailAddress() . '" target="_blank" class="" title="email link">' . emailAddress() . '</a>';
echo '</div>';

echo '</div>'; // end of col

echo '<div class="d-flex align-items-start justify-content-start" style="padding-top:15px;">';

echo '<div style="border-radius:50%;height:20px;min-width:20px;margin-right:10px;" class="bg-white d-flex align-items-center justify-content-center">';
echo '<svg style="height:10px;" fill="var(--accent-secondary)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>';
echo '</div>';

echo '<div>';
// echo '<p class="text-gray" style="margin:0;"><strong>Address</strong></p>';
echo '<span style="line-height:1;display:inline-block;" class="">' . address() . '</span>';
echo '</div>';

echo '</div>'; // end of col

echo '</div>';

// echo '<div class="col-lg-3 text-white">';
// echo '<strong>Navigation</strong>';
// echo '<p>';
// wp_nav_menu(array(
//     'menu' => 'footer',
//     'menu_class'=>'menu list-unstyled text-white text-uppercase mt-0'
//     ));

// echo '</div>';
// echo '<div class="col-lg-3 text-white">';
// echo '<strong>Shop</strong>';
// echo '<p>';
// wp_nav_menu(array(
//     'menu' => 'Product Categories',
//     'menu_class'=>'menu list-unstyled text-white text-uppercase mt-0'
//     ));

// echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

echo '<section class="pt-5 bg-accent">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-12">';



echo '</div>';
echo '<div class="col-12 text-center text-white">';

// echo get_template_part('partials/si');

echo '<div class="text-gray-1 pt-4">';

// the_field('website_message','options');

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<div class="text-center bg-light" style="padding:15px;">';
    echo '<div class="d-flex justify-content-center align-items-center">';
        echo '<small class=""><a href="https://latinowebstudio.com/" target="_blank" rel="noopener noreferrer" title="Web Design, Web Development & SEO done by Latino Web Studio in Denver, CO" style="" class="">Web Design, Web Development & SEO in Denver, CO</a> done by Latino Web Studio</small>';
    echo '</div>';
echo '</div>';
echo '</footer>';

echo codeFooter();
// if(get_field('footer', 'options')) { the_field('footer', 'options'); }
// if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>