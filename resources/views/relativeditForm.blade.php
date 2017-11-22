<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/relative/{{$id}}/editsave" method="post">
	<table>
		<tr>
			<td>name : </td>
			<td><input type="text" name="name" ></td>
		</tr>
		<tr>
			<td>contractdetail : </td>
			<td><input type="text" name="contractdetail"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Edit"></td>
		</tr>
	</table>
	</form>
	<form action="/relatives">
    <input type="submit" value="Back">
	</form>

</body>
</html>