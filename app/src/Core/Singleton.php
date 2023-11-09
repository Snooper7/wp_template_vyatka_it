<?php

namespace Core;

trait Singleton {
    private static $instance = null;

    private function __construct() { /* ... @return Singleton */ }  // Защищаем от создания через new Singleton

    public static function getInstance() {
        return
            self::$instance === null
                ? self::$instance = new static() // Если $instance равен 'null', то создаем объект new self()
                : self::$instance; // Иначе возвращаем существующий объект
    }
}