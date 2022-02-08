<?php	
	/*Palindrome*/
	$input=$_POST['pal'];
	
	$num = $input;
	 $sum = 0;
	 $r;
	 $temp = $num;
	 echo "<h3>Palindrome</h3>";
	 while($num>1){
	 	$r=$num%10;
	 	$sum=($sum*10)+$r;
	 	$num=$num/10;
	 }
	 
	 if($temp==$sum){
	 	echo $sum." is Palindrome<br>";
	 }
	 else{
	 	echo $sum." is NOT Palindrome<br><br>";
	 }
echo "<hr>";

	  /*Fibonacci Series*/
	  echo "<h3>Fibonacci Series</h3>";
	  $input1=$_POST['fib'];
	$num2= $input1;  
	$temp1 = 0;
	$t1 = 0;  
	$t2 = 1;  
	echo "Fibonacci Series of ".$input1." is : ";
	echo $t1.' '.$t2.' ';  
	while ($temp1 < $num2 )  
	{  
    	$t3 = $t2 + $t1;  
    	echo $t3.' ';  
    	
    	$t1 = $t2;  
    	$t2 = $t3;  
    	$temp1 = $temp1 + 1;  
    }
echo "<hr>";

/*Reverse a number*/
	echo "<h3>Reverse a number</h3>";
	$user_num=$_POST['reverse'];
	$rev=0;
	 echo "Reverse this number : ".$user_num;
	 while($user_num>1){
	 	$rem=$user_num%10;
	 	$rev=($rev*10)+$rem;
	 	$user_num=$user_num/10;
	 }
	 echo "<br>Reversed number is : ".$rev;
echo "<hr>";

	 /*Reverse a string*/
	echo "<h3>Reverse a string</h3>";
	$string=$_POST['str'];
	$length=strlen($string);
	echo "Reverse this string : ".$string;
	echo "<br>Reversed String is :";
	for ($i=$length-1 ; $i >= 0 ; $i--)   
		{  
 			 echo $string[$i];  
		} 
	echo "<br>";
echo "<hr>";

 /*Swap two number*/
    			/*With third variable*/
    echo "<h3>Swap with third variable</h3>";
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    $t;
    echo "Befor Swap number is ".$n1." & ".$n2;
    $t=$n1;
    $n1=$n2;
    $n2=$t;
    echo "<br><br>After Swap number is ".$n1." & ".$n2;
    		/*Without third variable*/
    echo "<h3>Swap without third variable</h3>";
    $n1 = $n1 ^ $n2;
    $n2 = $n1 ^ $n2;
    $n1 = $n1 ^ $n2;
     echo "After Swap number without third var ".$n1." & ".$n2;

echo "<hr>";

/*Leap Year*/
	echo "<h3>Leap Yaer</h3>";
	$year=$_POST['year'];
	if ($year%4==0 && $year%400==0) {
		echo $year." is Leap Year";

	}
	elseif ($year%400!==0 && $year%100==0) {
		echo $year." is Not a Leap Year";
	}
	else{
		echo "Not a Leap yaer";
	}
echo "<hr>";  

    /*Printing array*/
    echo "<h3>program to print an array</h3>";
    $color1=array("Black","Pink","Yellow","gray",);
    echo "[";
	for ($i=0; $i <count($color1) ; $i++) { 
		echo $color1[$i];
		echo "   ";
	}echo "]";
echo "<hr>";

	/*Printing array with key & value*/
	echo "<h3>print each element of an array with key & value</h3>";
	$color2=array("color_1"=>"Black","color_2"=>"Pink","color_3"=>"Yellow","color_4"=>"gray",);
	print_r($color2);
echo "<hr>";

	/*Number of element in array*/
	echo "<h3>number of elements in an array </h3>";
	echo "Number of Element present in an array is ".count($color1);
	echo "<br>";

	echo "<hr>";

	$arr=array(52,4,1,6,2,30);

/*sort elements an array in ascending order*/
	echo "<h3>sort elements an array in ascending order</h3>";
	echo "Array Before sortig : [";
	for ($i=0; $i <count($arr) ; $i++) { 
		echo $arr[$i];
		echo " ";
	}echo " ]";
	  /*Sorting*/
	 for ($i = 0; $i < count($arr); $i++) {     
        for ($j = $i+1; $j < count($arr); $j++) {     
           if($arr[$i] > $arr[$j]) {    
               $temp = $arr[$i];    
               $arr[$i] = $arr[$j];    
               $arr[$j] = $temp;    
           }     
        }     
    }  
    echo "<br>Array After sortig in ascending  order : [";
	for ($i=0; $i <count($arr) ; $i++) { 
		echo "$arr[$i]  ";
		echo " ";
	}  
echo "]<hr>";

/*$arr=array(52,4,1,6,2,30);*/
	/*sort elements an array in descending order*/
	echo "<h3>sort elements an array in ascending order</h3>";
	echo "Array Before sortig : [";
	for ($i=0; $i <count($arr) ; $i++) { 
		echo $arr[$i];
		echo " ";
	}echo " ]";
	 /*Sorting*/
	 for ($i = 0; $i < count($arr); $i++) {     
        for ($j = $i+1; $j < count($arr); $j++) {     
           if($arr[$i] < $arr[$j]) {    
               $temp = $arr[$i];    
               $arr[$i] = $arr[$j];    
               $arr[$j] = $temp;    
           }     
        }     
    }  
    echo "<br>Array After sortig in descending  order : [";
	for ($i=0; $i <count($arr) ; $i++) { 
		echo "$arr[$i]";
		echo " ";
	} echo " ]";
echo "<hr>";


   /*Sum of array element*/
	echo "<h3>Sum of array element</h3>";
	$arr=array(52,4,1,6,2,30);
	$summ=0;
	echo "Sum of array element : [";
	for($i=0;$i<count($arr);$i++)
	 {
	  echo "$arr[$i]  ";
	  $summ=$summ+$arr[$i];
	 }
	echo "]<br>Sum of array is: ".$summ;
	echo "<hr>";

	/*Remove duplicate element in array*/
   echo "<h3>Remove duplicate element in array</h3>";
	 $array = array(9,9,1,2,4,9,3,10,5,8,1,7,6);
		echo "Array containing Duplicate element : ";
		echo "[ ";
		for ($i=0; $i <count($array) ; $i++) { 
		echo $array[$i]." ";
	  }
	  echo " ]";
		echo "<br>";

		$count = count($array); //len of arr
		$new_array=array();   // blank array
		for($i=0;$i<count($array);$i++){
			if(in_array($array[$i],$new_array))
			{
					//if element present then do nothing
			}
			else{
				array_push($new_array,$array[$i]);
          // if element is no present in new_array then push element
				}
			}
			echo "<br>New Array after Removing Duplicate element : ";
			echo "[ ";
			for ($i=0; $i <count($new_array) ; $i++) { 
				echo $new_array[$i]." ";
			}
			echo " ]";
			echo "<hr>";

	/*Factorial*/
    echo "<h3>Factorial Number</h3>";
    $number=$_POST['fact'];
    $fact=1;
    for ($i=1; $i <=$number; $i++) { 
    		$fact=$fact*$i;
       }
       echo "Factorial Number of ".$number." is ".$fact;

echo "<hr>";

	/*TO count 5 to 15*/
	echo "<h3>To count 5 to 15 using loop</h3>";
	for ($i=5; $i <=15 ; $i++) { 
		echo $i."<br>";
	}
echo "<hr>";

	/*To check student grade based on the marks using if-else statement.
	Conditions*/
	echo "<h3>To check student grade</h3>";
    $marks=$_POST['mark'];
    echo "Entered mark is : ".$marks;
    echo "<br>";
    if ($marks>=60 and $marks<100) {
    	echo "First grade";
    }
    elseif($marks>=45 and $marks<59){
    	echo "Second grade";
    }
    elseif($marks>=33 and $marks<44){
    	echo "Third grade";
    }
    elseif($marks<33){
    	echo "Fail!!!";
    }
    elseif($marks>100){
    	echo "<font color=red>Enter valid marks</font>";
    }
echo "<hr>";

	/*To check if a person is eligible to vote*/
	echo "<h3>To check if a person is eligible to vote</h3>";
	$age=$_POST['age'];
	if ($age>=18) {
		echo "Person's age is ".$age." ,Person is eligible to vote";
	}
	else{
		echo "Person is Not eligible vote, person's age is ".$age."<br>Person's age should be 18 or 18+ to vote" ;
		$new_age=18-$age;
		echo "<br><b>Try after ".$new_age." years, Thank You!!!</b>";
	}
echo "<hr>";


?>