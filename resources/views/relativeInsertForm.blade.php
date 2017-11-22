<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/relatives/save' method="post">
	<table>
         <tr>
			<td>Relative ID : </td>
			<td><input type="text" name="id_relative"></td>
		</tr>
		<tr>
			<td>Name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Contractdetail : </td>
			<td><input type="text" name="contractdetail"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/relatives">
    <input type="submit" value="Back">
	</form>

</body>
</html>