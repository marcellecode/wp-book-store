<?php
    function admin_bar(){
        if(is_user_logged_in()){
        add_filter( 'show_admin_bar', '__return_true' , 1000 );
        }
    }
    add_action('init', 'admin_bar' );

    function book_store_add_functionalities() {
        add_theme_support( 'custom-logo' );
    }
    add_action('after_setup_theme', 'book_store_add_functionalities');

    function book_store_register_menu(){
        register_nav_menu(
            'nav-menu',
            'Nav menu'
        );
    }
    add_action('init', 'book_store_register_menu');

    function book_store_custom_header() {
        $args = array(
            'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
            'default-text-color' => '000',
            'width'              => 1000,
            'height'             => 250,
            'flex-width'         => true,
            'flex-height'        => true,
        );

        add_theme_support('custom-header', $args);
    }

    add_action( 'after_setup_theme', 'book_store_custom_header' );
?> 