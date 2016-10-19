<?php
/**
 * Created by Oleynikov.
 * User: Dima
 * Date: 13.09.2016
 * Time: 11:58
 */
function register_styles()
{
    wp_register_style( 'style', get_template_directory_uri() .
        '/style.css');
    wp_enqueue_style('style');
    wp_register_style('my-bootstrap', get_template_directory_uri() .
        '/libs/css/bootstrap.min.css');
    wp_enqueue_style('my-bootstrap');
    wp_register_style('font-awesome', get_template_directory_uri() .
        '/libs/css/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');
}
    add_action('wp_enqueue_scripts','register_styles');

function load_my_script()
{
    wp_deregister_script('jquery');
    wp_register_script('my-jquery', get_template_directory_uri() .
        '/libs/js/jquery.min.js');
    wp_enqueue_script('my-jquery');
    wp_register_script('bootstrap', get_template_directory_uri() .
    '/libs/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');
    wp_register_script('scrollup', get_template_directory_uri() .
        '/libs/js/scrollup.js');
    wp_enqueue_script('scrollup');
}
add_action('wp_enqueue_scripts','load_my_script');

register_nav_menu('menu', 'main_menu');

// Registering navwalker
require_once('wp_bootstrap_navwalker.php');



