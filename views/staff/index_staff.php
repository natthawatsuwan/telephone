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
>

	</t>
<br><br>Search Staff</front><br>
<form method="get" action=""><input type="text" name="key"><input  type="hidden" name="controller" value="staff"/><button type="submit" name="action" value="search"> Search</button> 
<input  type="hidden" name="controller" value="staff"/><button type="submit" name="action" value="newStaff"> New Staff</button>
<table>
<tr><td><font color="white">ID</front></td>
	<td><font color="white">Name</front></td>
	<td><font color="white">Last Name</front></td>
	<td><font color="white">Position</front></td>
<?php
foreach($staff_list as $staff)
{ echo "<tr>
<td>$staff->id</td>
<td>$staff->name</td>
<td>$staff->lname</td>
<td>$staff->posName</td>
<td><a href=?controller=staff&action=updateForm&staffID=$staff->id>update</a>
<td><a href=?controller=staff&action=deleteConfirm&staffID=$staff->id>delete</a>
</tr>";
}
echo "</table>";

?>
