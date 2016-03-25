<?php 
class MagicTest{
public static function __callstatic($name,$arguments){//静态方法里只能调用静态成员，所以要有static关键字
	echo "Static Calling".$name." with parameter: ". implode(",",$arguments)."\n";
}
}
$obj= new MagicTest();
MagicTest::runTest("para1","para2");

 ?>
 #