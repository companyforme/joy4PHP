<?php

define('JOY4PHP', dirname(__FILE__).DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."joy4PHP".DIRECTORY_SEPARATOR);
require JOY4PHP."joy4PHP.php";
define("WEB_ROOT",dirname(__FILE__).DIRECTORY_SEPARATOR);
$joy4PHP = new joy4PHP(WEB_ROOT."Conf/Conf.php");
try{
$joy4PHP->run();
}catch(Exception $e){
	echo "出现了异常：".$e->getMessage();
}