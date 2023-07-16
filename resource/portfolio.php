<?php

if (!defined('ABSPATH')) {
    die('-1');
}

console("portfolio_result");
function portfolio_style_result()
{
    return '
    /* filter */
    .moein_portfolio_card .elementor-portfolio__filters .elementor-active{
        border-radius: 5px;
        background: #5762C9;
        color: white;
    }
    .moein_portfolio_card .elementor-portfolio__filters li{
        border-radius: 5px;
        color: #474747;
        background: #EDEDED;
    }
    
    /* title */
    .moein_portfolio_card .elementor-portfolio-item__overlay{
        opacity: 1;
        justify-content: end;
        bottom: -50px;
        text-align:left;
    }
    .moein_portfolio_card article{
        overflow: visible !important;
        margin-bottom: 32px !important;
    }
    /*comment*/
    #comments{
        display: none;
    }
    ';
}
function portfolio_script_result()
{

    return '
    
    var tabsTotops = 0;
    window.addEventListener("scroll",(event) => {
        
        var all_tabs = document.querySelectorAll(".bdt-tabs-item-title");
        
        
        var position = window.pageYOffset;

        // Get an element s distance from the top of the page
        var getElemDistance = function ( elem ) {
            var location = 0;
            if (elem.offsetParent) {
                do {
                    location += elem.offsetTop;
                    elem = elem.offsetParent;
                } while (elem);
            }
            return location >= 0 ? location : 0;
        };
        
        if (position < 100){
            tabsTotops = getElemDistance( all_tabs[0] );
        }
        console.log(position < 100);


        console.log("scrollTop: " + document.documentElement.scrollTop);
        console.log("scroll is : " + tabsTotops);

        // if(tabsTotops => document.documentElement.scrollTop) { all_tabs[0].click();}
        
        const space = 200;
        const tab1  = tabsTotops;
        const tab2  = tab1 + space; // 2100
        const tab3  = tab2 + space; // 2300
        const tab4  = tab3 + space; // 2500

        // document.querySelectorAll(".elementor-widget-wrap .elementor-element-populated")[0].style="padding: 0px 0px " + (space * 2) + "px 0px !important;";
        var w_tabs = "";
        if(document.documentElement.scrollTop >= tab1 && document.documentElement.scrollTop <= tab2){
            console.log("tab1");
            w_tabs = 1;
        }else if(document.documentElement.scrollTop >= tab2 && document.documentElement.scrollTop <= tab3){
            console.log("tab2");
            w_tabs = 2;
        }else if(document.documentElement.scrollTop >= tab3 && document.documentElement.scrollTop <= tab4){
            console.log("tab3");
            w_tabs = 3;
        }else if(document.documentElement.scrollTop >= tab4 && document.documentElement.scrollTop <= tab4 + space){
            console.log("tab4");
            w_tabs = 4;
        }else{
            w_tabs = "";
        }
        
        if(w_tabs != ""){
            all_tabs[w_tabs - 1].click();
            console.log("clicked " + w_tabs-1);
        }

    });
    
    /*
    var elem_lightbox = document.getElementById("moein_zooming");

    if(elem_lightbox != undefined){
        for(var i = 0 ; i <= 50 ; i++){
            try{
                document.getElementById("moein_zooming").outerHTML = document.getElementById("moein_zooming").outerHTML.replace("data-bdt-lightbox","data-disable-bdt-lightbox");
                
                /*
                elem_lightbox = elem_lightbox.outerHTML.replace("data-bdt-lightbox","data-disable-bdt-lightbox");
                if(elem_lightbox != undefined){
                    document.getElementById("moein_zooming") = elem_lightbox;
                }
                */
                /*
            }catch(e){console.log(e)}
        }
    }
    */

    ';
}

?>
