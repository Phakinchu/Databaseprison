<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/activities/save' method="post">
	<table>
		<tr>
			<td>ActivityID : </td>
			<td><input type="text" name="id"></td>
		</tr>
        <tr>
        <td>activity : </td>
        <td><input type="text" name="activity"></td>
       </tr>
       <tr>
           <td>duration (hrs) </td>
           <td><input type="text" name="duration"></td>
       </tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/activities">
    <input type="submit" value="Back">
	</form>

</body>
</html>