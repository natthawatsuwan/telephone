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
<tr><td><font color="white">Number</font></td>
	<td><font color="white">Name</font></td>
	<td><font color="white">Last Name</font></td>
	<td><font color="white">PromotionName</font></td>
	<td><font color="white">CallFree</font></td>
	<td><font color="white">NetFree</font></td>
	<td><font color="white">NetOver</font></td>
	<td><font color="white">CallSum</font></td>
	<td><font color="white">NetSum</font></td>
	<td><font color="white">CallOver</font></td>
	<td><font color="white">Price</font></td>
	<td><font color="white">VAT</font></td>
	<td><font color="white">Total</font></td>
	</t>

<?php
foreach($bill_list as $bill)
{ 
	$Month = $_GET['month'];
	$Year = $_GET['year'];
echo "<tr>
	<td>$bill->PNumber</td>
	<td>$bill->Name</td>
	<td>$bill->SName</td>
	<td>$bill->PromotionName</td>
	<td>$bill->Price</td>
	<td>$bill->TeleFree</td>
	<td>$bill->NetFree</td>
	<td>$bill->call_over</td>
	<td>$bill->net_over</td>
	<td>$bill->sum_call</td>
	<td>$bill->sum_internet</td>
	<td>$bill->vat</td>
	<td>$bill->total</td>
	
	
	
	
	
<td class='text-left'><a href=?controller=report&action=bill_detail&PNumber=$bill->PNumber>billdetail</a></td> 
<td><a href=?controller=report&action=bill_payment&PNumber=$bill->PNumber&month=$Month&year=$Year>payment</a></td> 
	</tr>";
}
	echo "</table>";

?>
</table>
 </body>
</html>
