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
	<td><font color="white">PromotionName</front></td>
	<td><font color="white">DateOpen</front></td>
	<td><font color="white">total</front></td>

	</t>
<?php
foreach($history as $his)
{ 
	echo "<tr>
<td class='text-left'>$his->opennumber</td>
<td class='text-left'>$his->name</td>
<td class='text-left'>$his->surname</td>
<td class='text-left'>$his->namepack</td>
<td class='text-left'>$his->sum</td>
<td class='text-left'>$his->vat</td>
<td class='text-left'>$his->sum_tatal</td>
<td class='text-left'>$his->cus</td>
	</tr>";
}
	echo "</table>";

?>
</table>
 </body>
</html>