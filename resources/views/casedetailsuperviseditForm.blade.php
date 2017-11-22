<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/casedetail/{{$id}}/editsupervisesaveadd" method="post">
	<table>
		<tr>
			<td>Add Id officer : </td>
			<td><input type="text" name="id_officer" ></td>
		</tr>
        <tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>


    <form action="/casedetail/{{$id}}/editsupervisesavedelete" method="post">
	<table>
        <tr>
			<td>Delete Id officer : </td>
			<td><input type="text" name="id_officer" ></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Delete"></td>
		</tr>
	</table>
	</form>
        
	<form action="/prisoners">
    <br>
    <input type="submit" value="Back">
	</form>

</body>
</html>