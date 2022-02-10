<!-- trait -->
<?php 
	trait cal{
		function sum($x, $y){
			$a=$x+$y;
			return $a;
		}
	}
	
	class Sum
	{
		use cal;
	}
/*Static method*/
class greeting {
  public static function welcome() {
    echo "<br>Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}

echo "Trait<br>";
$obj1 = new Sum();
echo "Sum of two number : ".$obj1->sum(10,20);

echo "<hr><br>Static Method";
$obj2 = new SomeOtherClass();
echo $obj2->message();

?>