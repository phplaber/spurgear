<?php

// URL路由
class Dispatcher extends Base
{
    public static function route()
    {
        $uri = $_SERVER['PATH_INFO'];
        if (!empty($uri) && '/' !== $uri) {
            if ('/' === substr($uri, -1)) {
                $uri = substr($uri, 0, -1);
            }
            $uri_cell = explode('/', $uri);
            $module_name = $uri_cell[1];
            $action_name = $uri_cell[2];
        } else {
            $module_name = 'Index';
            $action_name = 'index';
        }
        define('MODULE_NAME', $module_name);
        define('ACTION_NAME', $action_name);
    }
}