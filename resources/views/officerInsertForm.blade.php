<!DOCTYPE html>
<html>
<head>
	<title>Officer insert form</title>
</head>
<body>

	<form action='/officers/save' method="post">
	<table>
		<tr>
			<td>Oficcer ID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Fender : </td>
			<td><input type="text" name="gender"></td>
		</tr>
		<tr>
			<td>DOB </td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td>Position : </td>
			<td><input type="text" name="position"></td>
		</tr>
		<tr>
			<td>Jail : </td>
			<td><input type="text" name="id_jail"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/prisoners">
    <input type="submit" value="Back">
	</form>

</body>
</html>