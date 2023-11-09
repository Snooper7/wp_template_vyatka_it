<?php

namespace Controller;

use Core\Singleton;
use System\Cache;

class Footer extends Controller {
    use Singleton;

    protected $template_name = 'footer';

    public function render() {
        echo $this->view();
    }
}