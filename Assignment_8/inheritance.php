<?php
	class Company{

		function setCname($cname){
			$this->name=$cname;
		}
	    function getCname()
		{
			return $this->name;
		}
		
	}
	
	class Employee extends Company{
		
		function setEname($ename){
			$this->name1=$ename;
		}
		function getEname()
		{
			
		    
		    return $this->name1;
			
		}
		
	}

	
	$obj = new Employee();

	$obj->setCname("ITWorks");
	$obj->setEname("Trupti");

	/*calling get function to print values*/
      echo "Company Name : ".$obj->getCname();
      echo "<br>";
      echo "Employee Name : ".$obj->getEname();
     
?>