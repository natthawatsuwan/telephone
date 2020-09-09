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
	<td><font color="white">Name</front></td>
	<td><font color="white">LastName</front></td>
	<td><font color="white">PromotionName</front></td>
	<td><font color="white">CallFree</front></td>
	<td><font color="white">NetFree</front></td>
	<td><font color="white">NetOver</front></td>
	<td><font color="white">CallSum</front></td>
	<td><font color="white">NetSum</front></td>
	<td><font color="white">CallOver</front></td>
	<td><font color="white">Price</front></td>
	<td><font color="white">VAT</front></td>
	<td><font color="white">Total</front></td>
	<td><font color="white">Staff_FN</front></td>
	<td><font color="white">Staff_LN</front></td>

<?php
foreach($payment_list as $bill)
{ 
	$PNumber = $bill->PNumber;
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
	<td>$bill->FName</td>
	<td>$bill->LName</td>
	
	
	
	<td class='text-left'><a href=?controller=report&action=balance&IDNumber=$bill->PNumber><button>Balance</button> </a></td>
	</tr>";
			
}
	echo "</table>";
?>
</table>
<?php  echo"<br>"; ?>
<?php  echo"<br>"; ?>
<?php  echo"<br>"; ?>
</body>
</html>
