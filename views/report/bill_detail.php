<!doctype html>
<html>
	<head>
		<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #BEBEBE}


th {
    background-color: #4CAF50;
    color: white;
}
</style>
 </head>
 <body>

<table>
<tr><td><font color="white">Number</font></td>
	<td><font color="white">Date</font></td>
	<td><font color="white">Time</font></td>
	<td><font color="white">Type</font></td>
	<td><font color="white">DestNumber</font></td>
	<td><font color="white">Amount</font></td>
	</t>
<?php
	foreach($bill_list as $bill)
{ 
	echo "<tr> 
<td>$bill->PNumber</td>
<td>$bill->Name</td>
<td>$bill->SName</td>
<td>$bill->PromotionName</td>
<td>$bill->Price</td>
<td>$bill->TeleFree</td>
	</tr>";
}
	echo "</table>";

?> 
</table>
 </body>
</html>

