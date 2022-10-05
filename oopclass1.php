<?php
class calculation{
	public $a, $b, $c;
function sum(){
$this->c=$this->a + $this->b;
return $this->c;
}
	
function sub(){
$this->c=$this->a - $this->b;
return $this->c;
}	
	
}



$c1=new calculation();
$c1->a=10;
$c1->b=20;
echo "Plus : ".$c1->sum()."<br>";


$c1=new calculation();
$c1->a=50;
$c1->b=22;
echo "Subtuction : ".$c1->sub();
?>