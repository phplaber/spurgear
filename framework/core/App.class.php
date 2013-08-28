<?php

class App
{
    /**
     * 初始化应用
     * 三个方面：设置错误和异常处理方法，注册AUTOLOAD方法和URL路由
     */
    public static function init()
    {
        set_error_handler(array('App','errorHandler'));
        set_exception_handler(array('App','exceptionHandler'));
        
        spl_autoload_register(array('Base', 'autoload'));
        
        Dispatcher::route();
    }
    
    /**
     * 运行应用
     */
    public static function run()
    {
        echo 'hello, spurgear!';
    }
    
    /**
     * 错误处理
     * @param int $errno 错误类型
     * @param string $errstr 错误信息
     * @param string $errfile 错误文件
     * @param int $errline 错误行数
     * @return void
     */
    public static function errorHandler($errno, $errstr, $errfile, $errline)
    {
        switch ($errno) {
            case E_USER_ERROR:
                $errorStr = "[$errno] $errstr ".basename($errfile)." 第 $errline 行.";
                break;
            case E_USER_WARNING:
                $errorStr = "[$errno] $errstr ".basename($errfile)." 第 $errline 行.";
                break;
            case E_USER_NOTICE:
                $errorStr = "[$errno] $errstr ".basename($errfile)." 第 $errline 行.";
                break;
            default:
                $errorStr = "[$errno] $errstr ".basename($errfile)." 第 $errline 行.";
                break;
        }
        
        // 错误信息写入日志文件
        Log::write($errorStr);
    }
    
    /**
     * 异常处理
     */
    public static function exceptionHandler()
    {
        
    }
}