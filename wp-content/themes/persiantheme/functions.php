<?php 

function load_css(){
    wp_register_style('bootstrap',get_template_directory_uri().'./css/bootstrap-grid.min.css',array(),false,'all');

wp_enqueue_style('bootstrap');


wp_register_style('main-style',get_template_directory_uri().'./style.css',array(),false,'all');

wp_enqueue_style('main-style');


 
}


add_action('wp_enqueue_scripts','load_css'); 


wp_enqueue_script('jquery');

// function load_js(){
//     wp_register_script('bootstrap-js',get_template_directory_uri('./js/bootstrap.min.js'),'jquery','false',footer:true);
// }





add_theme_support('menus');

//Register menu location 


register_nav_menus(
    array(
        'top-menu'=>'Top Menu Location',
        'footer-menu'=>'Footer Menu Location',

    )
    );