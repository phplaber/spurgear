<?php

class Base
{
    // 重载数据容器
	private $data = array();

	// 动态设置变量
	public function __set($name, $value)
	{
		if (property_exists($this, $name)) {
			$this->data[$name] = $value;
		}
	}

	// 动态获取变量
	public function __get($name)
	{
		return array_key_exists($name, $this->data) ? $this->data[$name] : null;
	}

	// 动态检查变量
	public function __isset($name)
	{
		return isset($this->data[$name]);
	}

	// 动态销毁变量
	public function __unset($name)
	{
		unset($this->data[$name]);
	}

	// 自动加载类
	public static function autoload($classname)
	{
	    // 自动加载工具类文件列表中文件
	    $utils_file = SPURGEAR_PATH . DS . 'utils' .DS . $classname . '.php';
	    if (is_file($utils_file)) {
	        require $utils_file;
	        return ;
	    }
	    
	    // 自动加载项目的Action类和Model类
	    if ('Action' === substr($classname, -6)) {
	        $file_path = ACTION_PATH . DS . $classname . '.class.php';
	        if (is_file($file_path)) {
	            require $file_path;
	        } else {
	            echo 'Not exists module --> ' . substr($classname, 0, -6);
	            exit;
	        }
	    } elseif ('Model' === substr($classname, -5)){
	        $file_path = MODEL_PATH . DS . $classname . '.class.php';
	        if (is_file($file_path)) {
	            require $file_path;
	        } else {
	            echo 'Not exists model --> ' . substr($classname, 0, -5);
	            exit;
	        }
	    } else {
	        // TODO
	    }
	    return ;
	}
}