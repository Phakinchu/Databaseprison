<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/level/{{$id}}/editsave' method="post">
	<table>
		<tr>
			<td>score : </td>
			<td><input type="text" name="score"></td>
		</tr>
		<tr>
			<td>lv </td>
			<td><input type="text" name="lv"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/levels">
    <input type="submit" value="Back">
	</form>

</body>
</html>