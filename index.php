<?php

// 应用入口文件
define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', dirname(__FILE__) . DS . 'app');
define('SPURGEAR_PATH', dirname(__FILE__) . DS . 'framework');

require SPURGEAR_PATH . DS . 'index.php';