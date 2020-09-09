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
	<td><font color="white">Date</front></td>
	<td><font color="white">SUM</front></td>
	<td><font color="white">Total</front></td>
	<td><font color="white">FName</front></td>
	<td><font color="white">LName</front></td>
	</t>

<?php
foreach($current as $curr)
{ 
	$IDNumber = $curr->IDNumber;
	echo "<tr>
<td>$curr->IDNumber</td>
<td>$curr->CusName</td>
<td>$curr->Promotion</td>
<td>$curr->DateOpen</td>
<td>$curr->total</td>
<td>$curr->Paid</td>


	</tr>";
}
	echo "</table>";

?>
</html>