<?php

class person{
	
	public$name;
	public$age;
	
	
	function __construct($uname="noname", $age1=0){
		$this->name=$uname;
		$this->age=$age1;
		
	}
	function show(){
	echo$this->name ." - " . $this->age ."<br>";	
		
		
	}	
}




$p1=new person();
$p2=new person("moheez",22);




$p1->show();
$p2->show();
?>