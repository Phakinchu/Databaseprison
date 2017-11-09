<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/freeprisonhistories/save' method="post">
	<table>
		<tr>
			<td>IDfreeprison : </td>
			<td><input type="text" name="id"></td>
		</tr>
        <tr>
            <td>freedate : </td>
            <td><input type="text" name="freedate"></td>
        </tr>
        <tr>
           <td>fname </td>
           <td><input type="text" name="fname"></td>
        </tr>
        <tr>
           <td>lname : </td>
           <td><input type="text" name="lname"></td>
        </tr>
        <tr>
           <td>type of freedom : </td>
           <td><input type="text" name="typefreedom"></td>
        </tr>
        <tr>
           <td>prisonerID : </td>
           <td><input type="text" name="prisoner"></td>
        </tr>
        <tr>
           <td><input type="submit" name="submit" value="Add"></td>
        </tr>
	</table>
	</form>
	<form action="/freeprisonhistories">
    <input type="submit" value="Back">
	</form>

</body>
</html>