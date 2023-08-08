<?php

// die('test');
function portfolios_shortcode(){
    // return '
    
    // <div class=-portfolio_breadcrumbs">
    //     <a href="' . get_bloginfo('wpurl')  .'">
    //         Xnet
    //     </a>
    //     /
    // </div>
    // ';
    return '<p>Hi moein</p>';
}

add_shortcode('portfolio-breadcrumbs', 'portfolios_shortcode');

