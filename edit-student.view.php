<html>
	<body>
		<form action="/update-student.php" method="POST">
			<input type="hidden" name = 'id' value ="<?=$student->id?>">
			<input type="text" name="first_name" placeholder="First Name" 
				value='<?=$student->first_name?>'>
			<input type="text" name="last_name" placeholder="Last Name"
				value='<?=$student->last_name?>'>
			<input type="number" name="age" placeholder="Age"
				value='<?=$student->age?>'>
			<input type="text" name="gender" placeholder="Gender"
				value='<?=$student->gender?>'>
			<input type="submit" name="submit">
		</form>
	</body>
</html>