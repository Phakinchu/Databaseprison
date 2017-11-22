<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/activity/{{$id}}/edit_activity_area_supervisesaveadd" method="post">
	<table>
		<tr>
			<td>Add Id area : </td>
			<td><input type="text" name="id_area" ></td>
		</tr>
        <tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>


    <form action="/activity/{{$id}}/edit_activity_area_supervisesavedelete" method="post">
	<table>
        <tr>
			<td>Delete Id area : </td>
			<td><input type="text" name="id_area" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Delete"></td>
		</tr>
	</table>
	</form>
        
	<form action="/activitys">
    <br>
    <input type="submit" value="Back">
	</form>

</body>
</html>