<?php

namespace Controller;

use Core\Singleton;
use System\Cache;

class Header extends Controller {
    use Singleton;

    protected $template_name = 'header';

    public function render() {
        echo $this->view();
    }
}