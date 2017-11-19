<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/officers/save' method="post">
	<table>
		<tr>
			<td>OfficerID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>DOB </td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td>position : </td>
			<td><input type="text" name="position"></td>
		</tr>
		<tr>
			<td>gender : </td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td>area : </td>
			<td><input type="text" name="area"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/officers">
    <input type="submit" value="Back">
	</form>

</body>
</html>