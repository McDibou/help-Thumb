<?php


class Autoloader
{
    static function registre()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    static function autoload($class)
    {
        require __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
    }
}