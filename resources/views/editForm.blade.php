<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/prisoner/{{$id}}/editsave" method="post">
	<table>
		<!-- <tr>
			<td>StudentID : </td>
			<td><input type="text" name="id"></td>
		</tr> -->
		<tr>
			<td>Fname : </td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td>LName : </td>
			<td><input type="text" name="lname"></td>
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
			<td>Address : </td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>Officer : </td>
			<td><input type="text" name="officer"></td>
		</tr>
		<tr>
			<td>level : </td>
			<td><input type="text" name="level"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/prisoners">
    <input type="submit" value="Back">
	</form>

</body>
</html>