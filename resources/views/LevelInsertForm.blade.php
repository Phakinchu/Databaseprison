<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/levels/save' method="post">
	<table>
		<tr>
			<td>id_level : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>lv </td>
			<td><input type="text" name="lv"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/levels">
    <input type="submit" value="Back">
	</form>

</body>
</html>