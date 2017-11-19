<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/officer/{{$id}}/editsave" method="post">
	<table>
		<!-- <tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr> -->
		<tr>
			<td>name : </td>
			<td><input type="text" name="name" ></td>
		</tr>
		<tr>
			<td>DOB : </td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td>position : </td>
			<td><input type="text" name="position"></td>
		</tr>
		<tr>
			<td>Gender : </td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td>area : </td>
			<td><input type="text" name="area"></td>
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