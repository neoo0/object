<?php
final class BaseClass{
	public function test(){
		echo "BaseClass::test callec\n";
	}
	final public function test1(){
		echo "BaseClass::test1 callec\n";		
	}
}

class ChildClass extends BaseClass{
	public function test(){
		echo "ChildClass::test callec\n";
	}
		public function test1(){
		echo "ChildClass::test1 callec\n";

	}
}
$obj=new ChildClass();
$obj->test1();

?>