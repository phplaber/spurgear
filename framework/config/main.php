<?php

// 框架惯例配置文件
defined('ENTRY_PATH') or exit('You have no permission to access this file!');

return array(
        // 默认加载核心文件列表
        'core' => array('Base', 'App', 'Action', 'Model', 'View'),    // Base基类需最先被加载
        
        // 默认自动加载工具类文件列表
        'utils' => array('Dispatcher', 'Log'),
);