<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/casedetails/save' method="post">
	<table>
		<tr>
			<td>CasedetailID : </td>
			<td><input type="text" name="id"></td>
		</tr>
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
           <td>PrisonerID</td>
           <td><input type="text" name="prisoner"></td>
       </tr>
		
		<tr>
			<td><input type="submit" name="submit" value="Add"></td>
		</tr>
	</table>
	</form>
	<form action="/casedetails">
    <input type="submit" value="Back">
	</form>

</body>
</html>