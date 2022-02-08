<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Program</title>
	<style>
		#sub{
			
			margin-left: 50%;
		}
	</style>
</head>
<body>
	<form method="post" action="Assignment-7_db.php">
		<div>
			<label>Select two dates to find total in between dates <br><br></label>
			<input type="date" name="date1" id="date1">
			<input type="date" name="date2" id="date2">
		</div>
		<br>
		<div>
			<label><b>Type a word to find in below line</b></label>
			<p>"Push Yourself Because No One Else Is Going To Do It For You"</p>
			<input type="text" name="find" id="find">
		</div>
		<br>
		<div>
			<label>Enter Two strings to concatenate : <br><br></label>
			<input type="text" name="string1" id="string1"> + 
			<input type="text" name="string2" id="string2">
		</div>
		<br>
		<input  id="sub" type="submit" name="submit">
	</form>

</body>
</html>