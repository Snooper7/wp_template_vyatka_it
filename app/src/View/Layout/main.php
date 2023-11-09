<?php

$header = \Controller\Header::getInstance();
$header->render();

foreach ($data['instances'] as $instance) {
    $instance->render();
}

$footer = \Controller\Footer::getInstance();
$footer->render();