<?php 

	interface Cartton{
		public function say(); // by default abstract //NO body , body will be in class
	}

	class Shinchan implements Cartton{ // class extends == interface implements
		public function say(){ 
			echo "Hello!!!!! Shinchan";
		}
	}

	class Tom implements Cartton{
		public function say(){
			echo "Hello!!!!! Tom & Jerry";
		}
	}

	class Micky_mouse implements Cartton{
		public function say(){
			echo "Hello!!!!! Micky mouse";
		}
	}


	$obj1 = new Shinchan();
	$obj1->say();
	echo "<br/>";

	$obj2=new Tom();
	$obj2->say();
	echo "<br/>";

	$obj3=new Micky_mouse();
	$obj3->say();
	echo "<br/>";

	?>