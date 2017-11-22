<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/areas/save' method="post">
	<table>
		<tr>
			<td>Area ID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Level area : </td>
			<td><input type="text" name="level"></td>
		</tr>
		<tr>
			<td>ID jail : </td>
			<td><input type="text" name="idjail"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/areas">
    <input type="submit" value="Back">
	</form>

</body>
</html>