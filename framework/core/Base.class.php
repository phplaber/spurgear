<?php

class Base
{
	private $data = array();	// 重载数据容器

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
	public function autoload($classname)
	{
	
	}
}