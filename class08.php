<?php 
class MagicTest{
public function __get($name){//静态方法里只能调用静态成员，所以要有static关键字
	return "Getting the property".$name."\n";
	}
public  function __set($name,$value){
	echo  "Getting the property".$name."to value ".$value."\n";
	}
public  function __isset($name){
	echo  "__isset invoked\n";
	return true;
	}
public function __u
}
$obj= new MagicTest();
echo '$obj->className is set?'.isset($obj->className)."\n";
echo '$obj->className is empty?'.empty($obj->className)."\n";
 ?>
