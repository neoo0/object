<?php 
class MagicTest{
	public function __tostring(){
		return "This is the Class MagicTest";
	}
	public function __invoke($x){
		echo "__invoke called with parameter".$x."\n";
	}
}
$obj= new MagicTest();
echo $obj;
$obj(5);
?>
