

<?php

if (!defined('ABSPATH')) {
    die('-1');
}

console("header");
function script_archive_portfolio_result()
{



    return '
    
    var all_lightbox = document.querySelectorAll("#moein_archive_portfolio .bdt-gallery-lightbox-item");

    for(var i = 0 ; i <= all_lightbox.length -1 ; i++){
        all_lightbox[i].classList.remove("bdt-gallery-lightbox-item");
    }
    ';
}

?>