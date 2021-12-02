<?php
//Scripts
function bcs_add_scripts(){
    wp_enqueue_style('bcs-main-style', plugins_url().'/bsi-carousel/css/style.css');
    wp_enqueue_script('bcs-main-script', plugins_url().'/bsi-carousel/js/main.js');
}

add_action('wp_enqueue_scripts','bcs_add_scripts');