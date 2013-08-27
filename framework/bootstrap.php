<?php

// 框架引导程序
defined('ENTRY_PATH') or exit('You have no permission to access this file!');

$config = require CONFIG_PATH . DS . 'main.php';
if (is_array($config['core']) && !empty($config['core'])) {
    foreach ($config['core'] as $filename) {
        $file = CORE_PATH . DS . $filename . '.class.php';
        if (is_file($file)) {
            require $file;
        }
    }
}

App::init();