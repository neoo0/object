<?php
class BaseClass{
	public function test(){
		echo "BaseClass::test callec\n";
	}
	 public function test1(){
		echo "BaseClass::test1 callec\n";		
	}
}

class ChildClass extends BaseClass{
	public $testme="访问类属性";
	const CONST_VALUE='A constant value';
	private static $sValue='static value';
	public function test(){
		echo "ChildClass::test callec\n";
	}
		public function test1(){
		echo "ChildClass::test1 callec\n";
		parent::test();//parent关键字可以可用于调用父类中被子类重写了的方法
		self::called();//2,self关键字可以用于访问类自身的成员方法，也可以用于访问自身的静态成员和类常量；不能用于访问类自身的属性；使用常量的时候不需要再常量名称前面添加$符号
		echo self::CONST_VALUE."\n";//3.static::关键字用于访问类自身定义的静态成员，访问静态属性时需要在属性前面添加$符号。

		echo static::$sValue."\n";
		echo self::$testme;
	}
	public function called(){
		echo "ChildClass::called() called \n";
	}
}
$obj=new ChildClass();
$obj->test1();

?>