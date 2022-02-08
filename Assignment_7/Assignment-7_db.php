<?php

  $date1 =$_POST['date1'];
  $date2 =$_POST['date2'];
  echo "<hr>";
  echo "<h3>Difference between two dates</h3>";
  echo "Difference between ".$date1." and ".$date2;
  $diff = strtotime($date2) - strtotime($date1); // here difference comes in sec so dive it by 86400 to get vaule in day
 /* echo $diff;*/
  $datediff= abs(round($diff / 86400)); // 24 * 60 * 60 = 86400 seconds
  echo " is <b>".$datediff."</b> Days ";
  echo "<hr>";



/*program in PHP to find the occurrence of a word in a string*/
  echo "<h3>Find a word in string</h3>";
  $word=$_POST['find'];
  $string = "Push Yourself Because No One Else Is Going To Do It For You";
  if(strpos($string, $word) /*!== false*/ == true){ 
  //to check whether a string contains a specific word or not.
    echo "\"".$word."\", Word Found in string";
    /*, at position  [".strpos($string, $word)."]"*/;
  } 
  else{
    echo "Word Not Found!";
  }
  echo "<hr>";
  

/*What will this code output*/
  echo "<h3>What will this code output??</h3>The OUTPUT is  : ";
  /*$x = (true & false); return boolint(0)*/
  /*$x = true & false;   return boolint(0)*/

  /*$x = (true && false); return bool(false)*/
  /* $x = true && false; return boolfalse**/

  /*$x = (true and false); return boolfalse*/
  $x = true and false;  /*return true due to precedence rule ,() . either it should return false*/
  var_dump($x);
  echo "<hr>";
 

/*What will this code output*/
  echo "<h3>What will this code output??</h3> The OUTPUT is <br>";
   $y = 5;
   echo $y;
   echo "<br />";
   echo $y++ + $y++;
   echo "<br />";
   echo $y;
   echo "<br />";
   echo $y-- - $y--;
   echo "<br />";
   echo $y;
   echo "<hr>";

/*Write a program for * pattern*/
   echo "<h3>Print Star pattern</h3>";
	  for($i=5;$i>=1;$i--)  
      {  
       for($j=1;$j<=$i;$j++)  
       {  
          echo "* ";  
       }  
      echo "<br>";  
    }  
	  echo "<hr>";

/*Write a program for  pattern*/
	 echo "<h3>Print pattern</h3>";
	  for($i=0;$i<=10;$i++)  
      {  
       for($j=1;$j<$i;$j++)  
       {  
          echo $j." ";  
       }  
      echo "<br>";  
    }  
	  echo "<hr>";


/*Program for finding the biggest number in an array without using any array functions*/
echo "<h4>array(1,2,4,9,3,10,5,8,7,6)</h4>";
	 echo "<h3>Print biggest element in array</h3>";
	 $arr=array(1,2,4,9,3,10,5,8,7,6);
	 $len=count($arr);
	 $max=$arr[0];
	 for ($i=1; $i < $len; $i++) { 
	 	if ($max<$arr[$i]) {
	 		$max=$arr[$i];
	 	}
	 }
	 echo "The Biggest number present in array is : ".$max;
	 echo "<hr>";



/*Write a Program for finding the smallest number in an array*/
	 echo "<h3>Print smallest element in array</h3>";
	 $arr=array(1,2,4,9,3,10,5,8,7,6);
	 $len=count($arr);
	 $min=$arr[0];
	 for ($i=1; $i < $len; $i++) { 
	 	if ($min>$arr[$i]) {
	 		$min=$arr[$i];
	 	}
	 }
	 echo "The smallest number present in array is : ".$min;
	 echo "<hr>";


/*Write a program to find second highest number in an array.*/
	 echo "<h3>Print Second biggest element in array</h3>";
	 $arr=array(1,2,4,9,3,10,5,8,7,6);
	 $len=count($arr);
	 $max1=$arr[0];
	 $max2=$arr[1];
	 for ($i=2; $i < $len; $i++) { 
	 	if ($arr[$i]>$max1) {
	 		$max2=$max1;
	 		$max1=$arr[$i];
	 	}
	 	elseif ($arr[$i]>$max2 && $arr[$i] != $max1) {
	 		$max2=$arr[$i];
	 	}
	 }
	 echo "The Second Biggest number present in array is : ".$max2;
	 echo "<hr>";


/*Write a program to concatenate two strings character by character. e.g : INFOTECH + ITWORKS = INFOTECHITWORKS*/
	 echo "<h3>Concatenate two strings</h3>";
	 $string1=$_POST['string1'];
	 $string2=$_POST['string2'];
	 echo $string1." + ".$string2." = ";
	 echo $string1.$string2;
	 echo "<hr>";

?>