<?php 
/**
 * 
 * author  liu.jl
 * date 2013-3-18
 *
 */
class Reg{
	
	private static $_instance=NULL;
	
	protected static $vars = array();
	
	
	public static function getInstance(){
		if(self::$_instance == NULL){
			$classname = get_class();
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	public  function __set($key,$value){
		self::$vars[$key] = $value;
	}
	
	public static  function set($key,$value){
		self::$vars[$key] = $value;
	}
	
	public function __get($key){
		return self::get($key);
	}
	public static function get($key){
		return isset(self::$vars[$key])?self::$vars[$key]:NULL;
	}
	
}