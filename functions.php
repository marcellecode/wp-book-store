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
?> 