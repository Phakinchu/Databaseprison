<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/prisonereducepunishmenthistory/{{$id}}/editsave" method="post">
	<table>

	<tr>
    <td>cause : </td>
    <td><input type="text" name="cause"></td>
</tr>
<tr>
    <td>time (d) </td>
    <td><input type="text" name="time"></td>
</tr>
<tr>
    <td>date : </td>
    <td><input type="text" name="date"></td>
</tr>
<tr>
    <td>prisoner : </td>
    <td><input type="text" name="prisoner"></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="Edit"></td>
</tr>
	</table>
	</form>
	<form action="/prisonereducepunishmenthistories">
    <input type="submit" value="Back">
	</form>

</body>
</html>