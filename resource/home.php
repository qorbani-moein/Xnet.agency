<?php

if (!defined('ABSPATH')) {
    die('-1');
}


console("home");
function home_result(){
    return '

    .eight_btn{
        /*transform: skewx(-15deg);*/
    }

    /* menu */
    .moein_menusec{
        /*display:none;*/
    }
    .moein-menu{
        z-index: 2;
        box-shadow: unset !important;
        background-color: unset;
        position: absolute;
        top: 0;
        left: 0px;
        width: 100%;
    }


    /* navbar */
    .moein_navbar {
        height: 100%;
    }
    .moein_navbar ul{
        display: grid;
        align-content: center;
        justify-content: center;
    }
    .moein_navbar div{
        align-content: center;
    }

    
    /* Review */
    /*
    [class*="elementor-widget-bdt-"] .swiper-container:not(.swiper-container-horizontal) {
        opacity: 1 !important;
    }
    */
    .bdt-review-img--left .bdt-ep-review-card-carousel-item, .bdt-review-img--right .bdt-ep-review-card-carousel-item {
        grid-gap: 52px;
    }
    .moein_review .bdt-ep-review-card-carousel-item{
        background-image: url("https://xnet.agency/wp-content/uploads/2023/03/Frame-6.svg");
        background-repeat: no-repeat;
        background-position: right;
        background-size: contain;
        min-width: 550px;
    }
    .moein_review .bdt-ep-review-card-carousel-content{
        text-align: left;
        padding-right: 50px !important;
    }


    /* circle */
    .moein_circle .bdt-ep-circle-info-sub-circle{
        border-radius: 4px !important;
    }
    .moein_circle .bdt-ep-circle-info-content{
        border: 0px !important;
        background-color: #F6F6F6 !important;
        /*z-index: -1; */
    }
    .moein_circle .bdt-ep-circle-info-item{
        background-color: #fff0 !important;
    }
    .moein_circle .bdt-ep-circle-info-inner:before , .moein_circle .bdt-ep-circle-info-inner:after{
        border-radius: 0px !important;
    }
    .moein_circle .bdt-ep-circle-info-inner:after{
        border-radius: 0px !important;
    }
    .moein_circle .bdt-ep-circle-info-wrap{
        scale: 0.8;
    }
    .bdt-ep-style-circle .bdt-ep-circle-info {
        overflow: visible !important;
        overflow-x: visible !important;
        overflow-y: visible !important;
    }

    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(1){
        transform: translate3d(98.995px, -190.995px, 0px) !important;
    }
    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(2){
        transform: translate3d(-190px, -98px, 0px) !important
    }
    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(3){
        transform: translate3d(-98.995px, -190.995px, 0px) !important;
    }
    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(4){
        transform: translate3d(-190px, 98px, 0px) !important;
    }
    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(5){
        transform: translate3d(-98.995px, 190.995px, 0px) !important;
    }
    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(6){
        transform: translate3d(195px, 98px, 0px) !important;
    }
    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(7){
        transform: translate3d(98.995px, 190.995px, 0px) !important;
    }
    .moein_circle .bdt-ep-circle-info-sub-circle:nth-child(8){
        transform: translate3d(190px, -98px, 0px) !important;
    }
    @media screen and (max-width: 782px){
        .moein_circle .bdt-ep-circle-info-wrap{
            scale: 0.6;
        }
        .moein_hover_box .bdt-ep-hover-box-button{
            position: absolute;
            bottom: 100px;
            left: 16% !important;
        }
    }

    /* Box Hover */
    .moein_hover_box .bdt-ep-hover-box-sub-title{
        padding-top: 100px;
    }
    .moein_hover_box .bdt-ep-hover-box-button{
        position: absolute;
        bottom: 100px;
        left: 35%;
    }


    .moein_hover_box .bdt-ep-hover-box-description{
        height: 100%;
    }

    @media screen and (min-width: 782px){
        /* glasses card */
        .moein-glasses-box .elementor-column-gap-default{
            min-height: 210px;
        }
        .moein_glasses_a{
            position: absolute;
            bottom: 85%;
            left: 22%;
        }
        .moein_glasses_a .elementor-counter-number-wrapper{
            // float: left;
        }
        .moein_glasses_b{
            position: absolute;
            right: 15%;
            bottom: 30%;
        }
        .moein_glasses_c{
            position: absolute;
            top: 30%;
            right: 54%;
            height: 115%;
        }
    }

    @media screen and (max-width: 782px){
        .moein_circle .bdt-ep-circle-info{
            margin-left: -11%;
        }
        .moein_form input{
            /*transform: skew(20deg, 0deg) !important;*/
        }
        .moein_form button{

            bottom: 12px;
            right: 12px;
            height: 45px !important;
            width: 200px
        }
        /* Sticky */

        .moein_sticky_text h2{
            font-size: 32px !important;
        }
        .moein_menu_mobi .bdt-slinky-vertical-menu a {
            display: grid !important;
        }
    }

    .moein_form input , .moein_form button{
        /*transform: skew(-20deg, 0deg);*/
    }
    @media screen and (min-width: 782px){
        .moein_form button{
            margin: 0px 0px 5px -150px;
            position: absolute;
            bottom: 2px;
            /*right: 230px;*/
            height: 45px !important;
            width: 200px;
            right: -6px;
            font-size: 13px;
            scale: 1.2;
        }
        /* Sticky */

        .moein_sticky_text h2{
            font-size: 64px;
        }        
    }
    
    .moein_form input{
        padding: 18px 15px;
    }

    
    
    ';
}
