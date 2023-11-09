<?php

namespace Controller;

use Core\View;
use Core\Singleton;

class Controller {
    protected $template_name = '';

    public function __construct() {
        $this->registerAdminPage();
    }

    protected function registerAdminPage() {

    }

    protected function view($data = [], $template_name = '' ) {
        if (!empty($template_name)) {
            $this->template_name = $template_name;
        }

        $view = new View();
        $view_content = $view->get($this->template_name, $data);

        if ($view_content) {
            return $view_content;
        }
    }
}