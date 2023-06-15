<?php


namespace App;


class Autoloader
{

    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class)
    {
        // $class = app\ctrl\RecetteCtrl
        if (strpos($class, __NAMESPACE__ . '\\') == 0) {
            $class = str_replace(__NAMESPACE__. '\\', '', $class);
            $class = strtolower(str_replace('\\', '/', $class));
            require_once __DIR__ . '/' . $class . '.php';
        }

    }
}