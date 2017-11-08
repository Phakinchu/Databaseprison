<!DOCTYPE html>
<html>
<head>
	<title>Prisoner edit form</title>
</head>
<body>

	<form action="/officers/{{$id}}/editsave" method="post">
	<table>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Gender : </td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td>DOB : </td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td>Officer : </td>
			<td><input type="text" name="position"></td>
		</tr>
		<tr>
			<td>Jail : </td>
			<td><input type="text" name="id_jail"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/officers">
    <input type="submit" value="Back">
	</form>

</body>
</html>