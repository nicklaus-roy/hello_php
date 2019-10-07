<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="/create-student.php">Add Student</a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($students as $student): ?>
				<tr>
					<td><?=$student->id?></td>
					<td><?=$student->first_name?></td>
					<td><?=$student->last_name?></td>
					<td><?=$student->age?></td>
					<td><?=$student->gender?></td>
					<td>
						<a href="/show-student.php?id=<?=$student->id?>">Show</a>
						<a href="/delete-student.php?id=<?=$student->id?>" onclick='confirmDelete(event)'>Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</body>
<script>
	function confirmDelete(event) {
		var continue_delete = confirm('Are you sure?');
		if(!continue_delete) {
			event.preventDefault();
		}
	}
</script>
</html>
