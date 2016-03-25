<?php

abstract class ACanEat{//1.abstract关键字用于定义抽象类；
	abstract public function eat($food);//
//2.在抽象方法前面添加abstract关键字可以标明这个方法是抽象方法不需要具体的实现；
//3.抽象类中可以包含普通的方法，有方法的具体实现；
	public function breath(){
		echo "breath use the air. \n";
	}
}

// 4.继承抽象类的关键字是extends；
class Human extends ACanEat{
//继承抽象类的子类需要实现抽象类中定义的抽象方法；
	public function eat($food){
		echo "Human eating ".$food."\n";
	}
	//呼吸这个方法就不用具体实现，就好像继承一个类
}

class Animal extends ACanEat{
	public function eat($food){
		echo "Animal eating ".$food."\n";
	}
}
$man=new Human();
$man->eat("Apple");
$man->breath();//和animal类（懒得写了）共用抽象类中的breath方法






?>