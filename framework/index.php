<?php

// 框架入口文件
defined('ENTRY_PATH') or define('ENTRY_PATH', dirname(__FILE__));
defined('CORE_PATH') or define('CORE_PATH', ENTRY_PATH . DS . 'core');
defined('CONFIG_PATH') or define('CONFIG_PATH', ENTRY_PATH . DS . 'config');

require ENTRY_PATH . DS . 'bootstrap.php';