<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/activity/{{$id}}/editsave" method="post">
	<table>
        <tr>
         <td>activity : </td>
         <td><input type="text" name="activity"></td>
        </tr>
        <tr>
            <td>duration (hrs) </td>
            <td><input type="text" name="duration"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Edit"></td>
        </tr>
	</table>
	</form>
	<form action="/activities">
    <input type="submit" value="Back">
	</form>

</body>
</html>