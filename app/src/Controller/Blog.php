<?php

namespace Controller;

use Core\Singleton;
use System\Cache;

class Blog extends Controller {
    use Singleton;

    protected $template_name = 'blog';

    protected function registerAdminPage() {
        acf_add_options_page(array(
            'page_title' 	=> 'Настройки сайта',
            'menu_title'	=> 'Настройки сайта',
            'menu_slug' 	=> 'site-settings',
            'capability'	=> 'edit_posts',
            'position'      => 22,
            'icon_url'      => 'dashicons-layout',
            'redirect'		=> false
        ));
    }

    public function render() {
        $data['site_name'] = Cache::getField('site_name');

        echo $this->view($data);
    }
}