<?php

if (!defined('ABSPATH')) {
    die('-1');
}


function style_about_us(){
    return '
    
    .moein_timeline{
        overflow: hidden;
    }

    @media (min-width: 767px){
        .moein_sticky_text h2{
            font-size: 64px;
        }
    }
    @media (max-width: 767px){
        .moein_sticky_text h2{
            font-size: 32px;
        }
    }
    
    ';
}

?>