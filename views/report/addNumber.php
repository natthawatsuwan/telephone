<!doctype html>
<html>
	<head>
		<style>
table {
    border-collapse: collapse;
    width: 5%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd) {
    background: black;
}
tr:nth-child(even){background-color: black}
tr:nth-child(1){background-color: black}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
 </head>
 <body>


<form method="get" action="">
    <table>
<tr><td><font color="white">Number</front>
	<input type="text" name="IDNumber"/></label><br></td>
 <tr><td><font color="white">CID</front> <input type="text" name="CID" /></label><br></td>
 </table>
 <table>
     	<tr>
     	  <td><font color="white">Promotion</front> <select name="ID">

<?php 
foreach($promotion_list as $pos)
{
	echo "<option value= $pos->ID> $pos->PromotionName</option>"; 
}
?>
</select></label><br>
</table>
?></label><br>
    <input  type="hidden" name="controller" value="report"/> 
    <button type="submit" name="action" value="index">Back</button> 
    <button type="submit" name="action" value="NewNumber"> Save</button> 
</form>

	 </body>
</html>