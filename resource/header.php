<?php

if (!defined('ABSPATH')) {
    die('-1');
}

console("header");
function header_result(){
    return '
    @media (max-width: 768px){
        .moein_footer_icon li:last-child{
            padding-top: 34px !important
        }
    }
    ';د
}

?>
