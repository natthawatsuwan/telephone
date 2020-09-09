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
 <body><form method="get" action="">
<table>
<tr><td><font color="white">
staffID </front> <input type="text" name="staffID" /> </label><br>
<tr><td><font color="white">Firstname</front> <input type="text" name="name" /> </label><br>
<tr><td><font color="white">Lastname</front> <input type="text" name="lname" /> </label>

<br>
<tr><td><font color="white">Position</front> <select name="posID">

<?php 
foreach($position_list as $pos)
{
	echo "<option value= $pos->id> $pos->name</option>"; 
}
?>

</select></label><br>
</table>
<input type="hidden" name="controller" value="staff"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addStaff"> Save</button>
</form>
