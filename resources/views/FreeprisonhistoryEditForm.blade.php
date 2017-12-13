<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/freeprisonhistory/{{$id}}/editsave" method="post">
	<table>
        <tr>
         <td>freedate : </td>
         <td><input type="text" name="freedate"></td>
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
            <td><input type="submit" name="submit" value="Edit"></td>
        </tr>
	</table>
	</form>
	<form action="/freeprisonhistories">
    <input type="submit" value="Back">
	</form>

</body>
</html>