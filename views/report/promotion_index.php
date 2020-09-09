<!doctype html>
<html>
	<head>
		<style>
table {
    border-collapse: collapse;
    width: 50%;
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
>

	</t>
<br><br>
Promotion
</front><br>
 

<table>
<tr><td><font color="white">ID</front></td>
  <td><font color="white">PromotionName</front></td>
<?php
foreach($promotion_list as $staff)
{ echo "<tr>
<td>$staff->ID</td>
<td>$staff->PromotionName</td>
</tr>";
}
echo "</table>";

?>
