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
<form method="get" action="">
<table>

<tr><td><font color="white">

Are you sure to delete this staff ?</font></td>
	

<form 	method="get" action="">
<input  type="hidden" name="controller" value="staff"/>
<input  type="hidden" name="staffID" value="<?php echo $staff->id; ?>"/>

</form>
</table>
 </body>
</html>
<button type="submit" name="action" value="index"> Back</button> 
<button type="submit" name="action" value="delete"> Delete </button> 