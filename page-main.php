<?php
    // Template Name: Главная

    $layout = \Controller\Layout::getInstance();
    $layout->render([
        \Controller\Blog::getInstance()
    ]);
?>


