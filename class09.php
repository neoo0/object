<?php 
class Nbaplayer{
	public $name;
	public function __clone(){
		$this->name="new james";
	}
}
$james=new Nbaplayer();
$james->name='James';

$james1=$james;
$james3=&$james;
$james2=clone $james;

$james->name='james_modify';
$james3->name='james_yinzi';

echo "james  name is  ".$james->name."\n";
echo "james1 name is  ".$james1->name."\n";
echo "james2 name is  ".$james2->name ."\n";
echo "james3 name is  ".$james3->name ."\n";

 ?>