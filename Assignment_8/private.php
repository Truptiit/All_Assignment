<?php
	class Company{
		//can not access in clid class
		 private $variable="private var access inside class";
		//echo $this->variable;

		 public function show(){
		 	echo $this->variable;
		 }


	}
	
	class Employee extends Company{
		public function var()
		{
		  /* $variable="private var access inside class";*/
		    return $this->variable;
			
		
		    
		}
		
	}

	
	$obj = new Employee();

	/*access private var in child class from parent class shows error*/
	$obj->var();
	/*access private var in parent class */
	$obj->show();
     
?>