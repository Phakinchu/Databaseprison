<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/visithistories/save' method="post">
	<table>
		<tr>
			<td>VisitID : </td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>name : </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>item </td>
			<td><input type="text" name="item"></td>
		</tr>
		<tr>
			<td>contract : </td>
			<td><input type="text" name="contract"></td>
		</tr>
		<tr>
			<td>datetime : </td>
			<td><input type="text" name="datetime"></td>
		</tr>
		<tr>
			<td>prisonerID : </td>
			<td><input type="text" name="prisoner"></td>
		</tr>
        <tr>
			<td>officerID : </td>
			<td><input type="text" name="officer"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/visithistories">
    <input type="submit" value="Back">
	</form>

</body>
</html>