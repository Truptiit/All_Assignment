<!-- 1] Create 1 class with name Books and create 2 functions in books class
2] Create Books class object and access its methods
 -->
<?php
	class Books{
		public $name;
		public $price;
		
		function setName($name,$price){
			$this->name=$name;
			$this->price=$price;

		}
		function getName()
		{
			return $this->name;
		}
		function getPrice()
		{
			return $this->price;
		}
	}
 $obj = new Books();

 /*Passing values to function*/
 $obj->setName("SHERLOCK HOMES",135);

 /*calling get function to print values*/
 echo "Book Name : ".$obj->getName();
 echo "<br>";
 echo "Book Price : ".$obj->getPrice()."/-";

?>