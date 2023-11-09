<?php

namespace Controller;

class Contacts extends Controller {
    static function register() {
        add_action('acf/init', function() {
            if( function_exists('acf_add_options_page') ) {
                acf_add_options_page(array(
                    'page_title' 	=> 'Контактные данные',
                    'menu_title'	=> 'Контактные данные',
                    'menu_slug' 	=> 'contacts-settings',
                    'capability'	=> 'edit_posts',
                    'position'      => 23,
                    'icon_url'      => 'dashicons-phone',
                    'redirect'		=> false
                ));
            }

            acf_add_local_field_group(array(
                'key' => 'contacts-page',
                'title' => 'Контактные данные',
                'fields' => array (
                    array (
                        'key' => 'phone',
                        'label' => 'Телефон',
                        'name' => 'Телефон',
                        'type' => 'text',
                    ),
                    array (
                        'key' => 'email',
                        'label' => 'E-Mail',
                        'name' => 'E-Mail',
                        'type' => 'text',
                    ),
                    array (
                        'key' => 'address-short',
                        'label' => 'Короткий адрес',
                        'name' => 'Короткий адрес',
                        'type' => 'textarea',
                        'new_lines' => 'br'
                    ),
                    array (
                        'key' => 'address',
                        'label' => 'Адрес',
                        'name' => 'Адрес',
                        'type' => 'textarea',
                        'new_lines' => 'br'
                    ),
                    array (
                        'key' => 'open',
                        'label' => 'Время работы',
                        'name' => 'Время работы',
                        'type' => 'textarea',
                        'new_lines' => 'br'
                    ),
                    array (
                        'key' => 'vk',
                        'label' => 'ВКонтакте',
                        'name' => 'ВКонтакте',
                        'type' => 'text',
                    ),
                    array (
                        'key' => 'inst',
                        'label' => 'Instagram',
                        'name' => 'Instagram',
                        'type' => 'text',
                    ),
                    array (
                        'key' => 'behance',
                        'label' => 'Behance',
                        'name' => 'Behance',
                        'type' => 'text',
                    ),
                    array (
                        'key' => 'requisits',
                        'label' => 'Реквизиты',
                        'name' => 'requisits',
                        'type' => 'file',
                    ),
                    array (
                        'key' => 'header_code',
                        'label' => 'Код в head',
                        'name' => 'Код в head',
                        'type' => 'textarea',
                    ),
                    array (
                        'key' => 'footer_code',
                        'label' => 'Код в footer',
                        'name' => 'Код в footer',
                        'type' => 'textarea',
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'contacts-settings',
                        ),
                    ),
                ),
            ));
        });
    }
}

Contacts::register();