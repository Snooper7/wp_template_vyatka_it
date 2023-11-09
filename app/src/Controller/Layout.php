<?php

namespace Controller;

use Core\Singleton;

class Layout extends Controller {
    use Singleton;

    protected $template_name = 'Layout/main';

    public function render($instances) {
        $data['instances'] = $instances;

        echo $this->view($data);
    }
}