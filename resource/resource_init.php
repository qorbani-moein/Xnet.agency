<?php

if (!defined('ABSPATH')) {
    die('-1');
}

console("resource_init");
function resource($elem, $type = null)
{
    include_once('header.php');
    include_once('home.php');
    include_once('portfolio.php');
    include_once('our_services.php');
    include_once('about_us.php');
    include_once('archive_portfolio.php');


    switch ($elem) {
        case "style-header":
            $result = header_result();
        break;
        case "style-home":
            console("style-home","resource");
            $result = home_result();
        break;
        case "style-page-portfolio":
            console("style-page-portfolio","resource");
            $result = portfolio_style_result();
        break;
        case "script-page-portfolio":
            console("script-page-portfolio","resource");
            $result = portfolio_script_result();
            break;
        case "style-page-ourservice":
            console("style-page-ourservice","resource");
            $result = ourservice_style_result();
            console("style-page-ourservice","resource");
            $result = ourservice_style_result();
            break;
        case "style-page-aboutus":
            console("style-page-aboutus","resource");
            $result = ourservice_style_result();
            break;
        case "style-archive-ourservices":
            console("style-archive-ourservices","resource");
            $result = archive_ourservice_style_result();
            break;
        case "script-archive-portfolio":
            console("script-archive-portfolio","resource");
            $result = script_archive_portfolio_result();
            break;
    }

    if ($type == 'style' || $type == 'css')
        $result = '<style>' . $result . '</style>';
    if ($type == 'script' || $type == 'js')
        $result = '<script>' . $result . '</script>';
    return $result;
}

?>