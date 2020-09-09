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
 	<td>Paid</td>
<table>
<tr><td><font color="white">Number</front></td>
	<td><font color="white">Name Surname</front></td>
	<td><font color="white">PromotionName</front></td>
	<td><font color="white">DateOpen</front></td>
	<td><font color="white">total</front></td>

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
<td><a href=?controller=report&action=current_detail&Number=$IDNumber>detail</a></td> 
	</tr>";
}
	echo "</table>";

?>
</table>
	<?php  echo"<br>"; ?>
<?php  echo"<br>"; ?>
<?php  echo"<br>"; ?>
<?php  echo"<br>"; ?>
<td>Non</td>
<table>
<tr><td><font color="white">Number</front></td>
	<td><font color="white">Name Surname</front></td>
	<td><font color="white">PromotionName</front></td>
	<td><font color="white">DateOpen</front></td>
	<td><font color="white">total</front></td>

	</t>
	<?php
foreach($currents as $curr)
{ 
 	$IDNumber = $curr->IDNumber;
	echo "<tr>
<td>$curr->IDNumber</td>
<td>$curr->CusName</td>
<td>$curr->Promotion</td>
<td>$curr->DateOpen</td>
<td>$curr->total</td>
	<td class='text-left'><a href=?controller=report&action=balance&IDNumber=$curr->IDNumber><button>Balance</button> </a></td>


	</tr>";
}
	echo "</table>";

?>
 </body>
</html>