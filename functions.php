<?php

function potato_script_enqueue() {
    wp_enqueue_script( 'potatojs', get_template_directory_uri() . '/bower_components/webcomponentsjs/webcomponents-lite.js', array(), '1.0.0');
    wp_enqueue_style( 'potatostyles', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'potato_script_enqueue');

function potato_theme_setup () {
    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'Primary Header Navigation' );
}

add_action( 'init', 'potato_theme_setup');


function jsonOut ($val) {
    $data = (json_encode($val, JSON_PRETTY_PRINT));
    if(array_key_exists('callback', $_GET)){
        header('Content-Type: text/javascript; charset=utf8');
       // header("Access-Control-Allow-Origin: *");
       // header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        $callback = $_GET['callback'];
        echo $callback.'('.$data.');';
    }else{
        // normal JSON string
        //header('Content-Type: application/json; charset=utf8');
        //header('Cache-Control: no-cache, must-revalidate');
        //header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        echo $data;
    }
}
