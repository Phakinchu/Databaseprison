<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/prisonerbehavioralhistory/{{$id}}/editsave" method="post">
	<table>
   
        <tr>
         <td>crime : </td>
         <td><input type="text" name="crime"></td>
        </tr>
        <tr>
            <td>guilt </td>
            <td><input type="text" name="guilt"></td>
        </tr>
        <tr>
            <td>start_date : </td>
            <td><input type="text" name="start_date"></td>
        </tr>
        <tr>
            <td>end_date : </td>
            <td><input type="text" name="end_date"></td>
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
	<form action="/prisonerbehavioralhistories">
    <input type="submit" value="Back">
	</form>

</body>
</html>