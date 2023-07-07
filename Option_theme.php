<?php

/**
 * Plugin Name: Option Theme - Eight
 * Plugin URI:  https://eightco.org
 * Description: All Option of Your Site
 * Version:     0.1
 * Author:      eightco
 * Author URI:  https://eightco.org
 * Text Domain: eight-option-theme-xnet
 * License: GPLv3
 */

if (!defined('ABSPATH')) {
  die('-1');
}


add_action('wp_footer', 'query_page');

function query_page(){
  include('init.php');
  
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    $current_page = "https://";   
  else  
    $urcurrent_pagel = "http://";   
  // Append the host(domain name, ip) to the URL.   
  $current_page.= $_SERVER['HTTP_HOST'];   

  // Append the requested resource location to the URL   
  $current_page.= $_SERVER['REQUEST_URI'];    

  $page_home = get_site_url() . '/';
  $page_portfolio = $page_home . 'portfolio-item';
  $page_ourservice = $page_home . 'our-services';
  $page_category = "";
  $page_about_us = $page_home . "about-us";
  $page_archive_portfolio = $page_home . "portfolio";

  console( substr($current_page,strlen($current_page) , 1));
  if(substr($current_page,strlen($current_page)-1 , 1) == "/"){
    $page_portfolio = $page_portfolio .  "/";
    $page_ourservice = $page_ourservice .  "/";
    $page_about_us = $page_about_us .  "/";
  }
  
  console("start");
  console("current_page: " . $current_page); 
  console("page_home: " . $page_home); 
  console("page_portfolio: " . $page_portfolio); 
  // console("page_shop_en: " . substr($current_page,0,strlen($page_shop_en)));
  // console('page_shop_fa: ' . $page_shop_fa);
  _header();
  

  if ($current_page == $page_home) {
    home_page();
  }if ($current_page == $page_category) {
    // script_page_cat0egory();
  }if ($current_page == $page_archive_portfolio) {
    page_archive_portfolio();
  }if ($page_portfolio == substr($current_page,0,strlen($page_portfolio))) {
    page_portfolio();
  }if ($page_ourservice == substr($current_page,0,strlen($page_ourservice))) {
    page_ourservice();
  }if ($current_page == $page_about_us) {
    page_about_us();
  }if ($current_page == $page_ourservice) {
    page_archive_ourservices();
  }
  //elseif($current_page == substr($current_page,0,strlen($page_shop_en))){
  //     script_page_shop_EnToFa();
  // }
}

function page_archive_portfolio(){
  console("page_archive_portfolio");
  echo resource('script-archive-portfolio','js');
}
function page_archive_ourservices(){
  console("page_archive_ourservices");
  echo resource('style-archive-ourservices','css');
}
function page_about_us(){
  console("page_about");
  echo resource('style-page-aboutus','css');
}
function page_ourservice (){
  console("page_ourservice");
  echo resource('style-page-ourservice','css');
}
function page_portfolio(){
  console("page_portfolio");
  echo resource('style-page-portfolio','css');
  echo resource('script-page-portfolio','js');
}

function _header(){
    console("header");
    echo resource('style-header','css');
}

function home_page(){
  echo resource('style-home','css');
}