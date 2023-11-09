<?php

namespace Controller;

class Content extends Controller {
    static function register() {
        add_action('acf/init', function() {
            acf_add_options_page(array(
                'page_title' 	=> 'Контент сайта',
                'menu_title'	=> 'Контент сайта',
                'menu_slug' 	=> 'content-settings',
                'capability'	=> 'edit_posts',
                'position'      => 22,
                'icon_url'      => 'dashicons-layout',
                'redirect'		=> false
            ));
        });
    }
}