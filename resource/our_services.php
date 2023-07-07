<?php

if (!defined('ABSPATH')) {
    die('-1');
}

console("file: our_services");

function ourservice_style_result(){
    console("ourservice_style_result");
    return '
    .moein_brand .bdt-ep-brand-carousel-inner{
        text-align: center;
        padding: 0px 64px;
    }
    .moein_brand .bdt-ep-brand-carousel-link{
        pointer-events: none;
    }
    
    @media screen and (min-width: 782px){
        .moein_portfolio{
            scale: 1.3;
        }
    }
    .moein_portfolio .bdt-gallery-item {
        min-height: 0px !important;  
    }
        
    ';
}

function archive_ourservice_style_result(){
    console("archive_ourservice_style_result");
    return '
        .moein_serction_services{
            position: absolute;
        }
        .simple-translate-system-theme{
            display: none;
        }
    ';
}
