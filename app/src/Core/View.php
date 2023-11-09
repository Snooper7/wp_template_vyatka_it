<?php

namespace Core;

class View {
    private $view_dir = '/app/src/View/';

    public function get($template_name, $data = []) {
        if (file_exists(locate_template($this->view_dir . $template_name . '.php'))) {
            ob_start();

            require locate_template($this->view_dir . $template_name . '.php');

            $template = ob_get_clean();

            return $template;
        }
    }
}