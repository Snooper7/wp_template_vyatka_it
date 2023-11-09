<?php

namespace Core;

use Controller\Blog;

class App {
    public $blog;

    public function __construct() {
        $this->blog = Blog::getInstance();
    }
}