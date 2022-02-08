<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STRING ARRAY</title>
</head>
<body>
	<?php
	echo "<h3>strlen()</h3>";
	echo strlen("STRING");
	echo "<hr>";

	echo "<h3>str_word_count()</h3>";
	echo str_word_count("STRING");
	echo "<hr>";

	echo "<h3>strrev()</h3>";
	echo strrev("STRING");
	echo "<hr>";

	echo "<h3>strpos(string,find) find text position and return first index value of string 1st char else return false</h3>";
	echo strpos("STRING","T"); //Case-sensitive
	echo "<hr>";

	echo "<h3>str_replace(old_word, new_word, string)</h3>";
	echo strlen("STRING");
	echo "<hr>";

	echo "<hr><h2>Array</h2>";

	echo "<h3>print array</h3>";
	$arr =["A","B","C","D"];
	print_r($arr);
	echo "<hr>";
	
	echo "<h3>Print single array value arr[0] : </h3>";
	print_r($arr[0]);
	echo "<hr>";
	
	echo "<h3>Array Length count(var)</h3>";
	echo count($arr);
	echo "<br>";
	echo "<hr>";
	
	echo "<h3>array_change_key_case(array, case)</h3>";
	
	$age=array("peter"=>"35","ben"=>"40","joe"=>"47");
	
	print_r(array_change_key_case($age,CASE_UPPER));
	echo "<hr>";
	
	echo "<h3>array_pad(array, size, value)</h3>";
	$a=["red","green"];
	print_r(array_pad($a,5,"blue"));
	echo "<br>";
	echo "<hr>";

	echo "<h3>Array pop</h3>";
	echo "array before array_pop : ";
	print_r($a);
	echo "array after array_pop : ";
	array_pop($a);
	print_r($a);
	echo "<hr>";
	
	echo "<h3>array push</h3>";
	array_push($a,"white");
	print_r($a);
	echo "<hr>";

	echo "<h3>array_key_exists() Checks if the specified key exists in the array</h3>";
	if (array_key_exists("peter", $age)) {
		echo "key exist";
	}
	else {
		echo "key does not exist";
	}
	echo "<hr>";

	echo "<h3>array_reverse</h3>";
	print_r(array_reverse($arr));
	echo "<hr>";

	echo "<h3>array_search</h3>";
	print_r(array_search("B",$arr));
	echo "<hr>";
	
	?>
</body>
</html>