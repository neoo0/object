<?php
//类
//
class Human{
	public $name;	
	protected  $heght;	
	public $weight;	
	protected $isHungry=true;
	public static $sValue="static  value in Huma class.";

	public function eat($food){
		echo  $this->name."'s eating".$food."\n";//food?
	}
	public function info(){
		echo "Human: ".$this->name.";".$this->height.";".$this->isHungry."\n";
	}	

}
class NbaPlayer extends Human{
 
	public $team='bull';
	public $playerNumber='23';
	private $age="40";//
	public static $president="David stertn";

	public  static function changePresident($newPrsdt){
		self::$president=$newPrsdt;
		echo parent::$sValue."\n";
	}
//构造函数

	function __construct($name,$height,$weight,$team,$playerNumber){
		$this->name=$name;
		//$this是php里的伪变量，表示对象自身。可以通过$this->的方式访问对象的属性和方法
		$this->height=$height;
		$this->weight=$weight;
		$this->team=$team;
		$this->playerNumber=$playerNumber;
		echo "construct  ".$this->name;
		echo "\n";
		//echo $this->isHungry."\n";
	}
	function __destruct(){
		echo "destruct  ".$this->name." \n";
	}

//方法定义
 
 	public function getAge(){
 		echo $this->name.".'s age is ".($this->age-2)."\n";
 	}
	public function run(){
	echo 'Running\n';
	}

	public function jump(){
	echo 'Jumping\n';
	}
	public function dribble(){
	echo 'Dribbing\n';
	}
	public function shoot(){
	echo 'Shooting\n';
	}
	public function dunk(){
	echo 'Dunking\n';
	}	
	public function pass(){
	echo "passing\n";
	}

}

//雷倒对象的实例化

$jordan=new NbaPlayer("Jordan","198cm","98kg","bull","23");
$james=new NbaPlayer("James","198cm","98kg","bull","23");

NbaPlayer::changePresident("Adam Silver");
echo NbaPlayer::$president."\n";
echo NbaPlayer::$sValue."2nd\n";
// echo "jordan: ".$jordan->president."\n";
// echo "james: ".$james->president."\n";


// $jordan->info();
?>