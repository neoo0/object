<?php

interface ICanEat{
	public function eat($food);
}
class Human implements ICanEat{
	public function eat($food){
		echo "Human eating  ".$food."\n";
	}
}
class Animal implements ICanEat{
	public function eat($food){
		echo "Animal eating  ".$food."\n";
	}
}
interface ICanPee extends ICanEat{//这里继承了ICanEat接口的方法
	public function pee();//又新建了一个方法
}
class Human1 implements ICanPee{
	public function pee(){}
	public function eat($food){}//注意由于接口继承了，所以这里的方法要具体实现
}
//$obj=new Human();
//$monkey=new Animal();
// check($obj);
//var_dump($obj instanceof ICanEat);
//
/*function check($obj,$food=null){
	if($obj instanceof ICanEat){
		$obj->eat($food);
	}
	else
	echo $obj."can not eat.";
}*/
?>
