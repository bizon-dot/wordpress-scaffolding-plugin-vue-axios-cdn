<?php
/*
/** 
 * Basic Scaffolding 
 * 
 * Basic scaffolding for WP plugin.
 * 
 * @package basic-wp-plugin-scaffolding 
 * @author Roberto Aureli
 * @copyright 2020 Roberto Aureli 
 * @license GPL-2.0-or-later 
 * 
 * @basic-wp-plugin-scaffolding 
 * Plugin Name: Basic Scaffolding 
 * Plugin URI: https://mysite.com/hello-world 
 * Description: Basic scaffolding for WP plugin.
 * Version: 0.0.1 
 * Author:Roberto Aureli
 * Author URI: 
 * License: GPL v2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt */


 // Function menu

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'views/index.php');
require_once(ROOTDIR . 'views/create.php');




add_action('admin_menu','news_flash_menu');
function news_flash_menu() {

      /*
       add_menu_page(
           $page_title,
           $menu_title,
           $capability,
           $menu_slug,
           $function,
           $icon_url,
           $position
       );

       add_submenu_page(
           $parent_slug,
           $page_title,
           $menu_title,
           $capability,
           $menu_slug,
           $function
       );
   } */
	
	
	add_menu_page('Index', 
	'Index',
	'manage_options', 
	'index',
	'index' ,
	);

    add_submenu_page('index',
        'Create',
        'Create',
        'manage_options',
        'create',
        'create'
    );
	
	
}


    

// Load scripts
function news_css_js(){
    wp_enqueue_style('news-css', plugin_dir_url(__FILE__) . 'resource\css\style.css');
    wp_enqueue_script('news-js', plugin_dir_url(__FILE__) . 'resource\js\main.js');
    // Vue cdn 
    wp_enqueue_script('vue-js', 'https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.31/vue.cjs.js');
    // Axios cdn
    wp_enqueue_script('axios-js', 'https://unpkg.com/axios/dist/axios.min.js');
}

add_action('admin_enqueue_scripts', 'news_css_js');


