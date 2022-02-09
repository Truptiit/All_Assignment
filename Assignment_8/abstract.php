<?php
/*Shop detail 
dairy
grocery
cosmetics*/
abstract  class ShopDetail{
	
	 abstract protected function detail($name, $pay, $product);
}

 class Cdairy extends shopDetail {
 	public function detail($name, $pay, $product)
	{
        echo "<br><b>Dairy product</b>";
        echo "<br>";
 		echo "Customer Name : ".$this->name=$name;
 		echo "<br>";
		echo "Amount to pay : ".$this->pay=$pay;
		echo "<br>";
		echo "Purchased Product : ".$this->product=$product;
		
	}
 }
 class Cgrocery extends shopDetail {
 	
 	public function detail($name, $pay, $product)
	{
		echo "<br><b>Grocery product</b>";
        echo "<br>";
 		echo "Customer Name : ".$this->name=$name;
 		echo "<br>";
		echo "Amount to pay : ".$this->pay=$pay;
		echo "<br>";
		echo "Purchased Product : ".$this->product=$product;
		
	}
 }
 class Ccosmetics extends shopDetail {
 	
 	public function detail($name, $pay, $product)
	{
		echo "<br><b>Cosmetics product</b>";
        echo "<br>";
 		echo "Customer Name : ".$this->name=$name;
 		echo "<br>";
		echo "Amount to pay : ".$this->pay=$pay;
		echo "<br>";
		echo "Purchased Product : ".$this->product=$product;
		
	}
 }
$dairy_obj = new Cdairy();
echo $dairy_obj->detail("ABC","10,000/-","Milk");
echo "<br>";

$grocery_obj = new Cgrocery();
echo $grocery_obj->detail("PQR","20,000/-","Grocery");
echo "<br>";

$cosmetics_obj = new Ccosmetics();
echo $cosmetics_obj->detail("XYZ","45,000/-","Cosmetics");
echo "<br>";


/*abstract class parentClass{
	
	public $name="Trupti";

	abstract protected function cal($a, $b);

}
class childClass extends parentClass{

	 public function cal($c, $d){
	 	echo $c + $d;
	 }

}
 $test = new childClass();
 echo $test->cal(10,20);
*/
?>