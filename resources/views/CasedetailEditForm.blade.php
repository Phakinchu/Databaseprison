<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action="/casedetail/{{$id}}/editsave" method="post">
	<table>
    <tr>
    <td>section : </td>
    <td><input type="text" name="section"></td>
   </tr>
   <tr>
       <td>punishment </td>
       <td><input type="text" name="punishment"></td>
   </tr>
   <tr>
       <td>duration</td>
       <td><input type="text" name="duration"></td>
   </tr>
   <tr>
       <td>OfficerID</td>
       <td><input type="text" name="officer"></td>
   </tr>
        <tr>
            <td><input type="submit" name="submit" value="Edit"></td>
        </tr>
	</table>
	</form>
	<form action="/casedetails">
    <input type="submit" value="Back">
	</form>

</body>
</html>