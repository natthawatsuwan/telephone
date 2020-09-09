<!doctype html>
<html>
	<head>
		<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(odd) {
    background: #BEBEBE;
}
tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(1){background-color: black}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
 </head>
 <body>
<table>
<tr><td><font color="white">Number</front></td>
	<td><font color="white">Name Surname</front></td>
	<td><font color="white">START</front></td>
	<td><font color="white">END</front></td>
	<td><font color="white">sum</front></td>
	<td><font color="white">total</front></td>

	</t>
</form> 
<?php
foreach($history as $his)
{ 
 	$PhoneNo = $his->PhoneNo;
	echo "<tr>
<td>$his->PhoneNo</td>
<td>$his->CusName</td>
<td>$his->DateOpen</td>
<td>$his->CloseDate</td>
<td>$his->sum</td>
<td>$his->total</td>


<td><a href=?controller=report&action=current_detail&Number=$PhoneNo>detail</a></td> 
	</tr>";
}
	echo "</table>";

?>
</table>
 </body>
</html>