<?php

class App
{
    public static function init()
    {
        // 设定错误和异常处理
        set_error_handler(array('App','errorHandler'));
        set_exception_handler(array('App','exceptionHandler'));
        
        // 注册AUTOLOAD方法
        spl_autoload_register(array('Base', 'autoload'));
        
        // URL路由
        Dispatcher::route();
    }
    
    public static function run()
    {
        echo 'hello, spurgear!';
    }
    
    public static function errorHandler()
    {
        
    }
    
    public static function exceptionHandler()
    {
        
    }
}