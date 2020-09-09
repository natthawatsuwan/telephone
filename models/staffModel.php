<?php  
class Staff
{ 
	public $id;
	public $name;
	public $lname;
	public $posID;
	public $posName;
	public function __construct($id,$name,$lname,$posID,$posName)
	{
		$this->id = $id;
		$this->name = $name;
		$this->lname = $lname;
		$this->posID = $posID;
		$this->posName = $posName;
	}
	public static function get($id)
	{
		require("connection_connect.php");
		$sql = "select * from Staff,Position where SID = '$id' and Staff.posId = Position.posId ";
		$result=mysql_query($sql) or die(mysql_error());
		$my_row = mysql_fetch_array($result);
		$id= $my_row[SID];
		$name = $my_row[FName];
		$lname = $my_row[LName];
		$posID = $my_row[posId];
		$posName = $my_row[posName];
		require("connection_close.php");
		return new Staff($id,$name,$lname,$posID,$posName);
	}
	
	public static function getAll()
	{ 
		//$staffList = [];
		require("connection_connect.php");
		$sql = "select * from Staff,Position where Staff.posId = Position.posId ORDER BY SID ASC";
		$result=mysql_query($sql) or die(mysql_error());
		while($my_row = mysql_fetch_array($result))
		{
			$id= $my_row[SID];
			$name = $my_row[FName];
			$lname = $my_row[LName];
			$posID = $my_row[posId];
			$posName = $my_row[posName];
			$staffList[]= new Staff($id,$name,$lname,$posID,$posName);
		}
		require("connection_close.php");
		return $staffList;
	}
	public static function search($key)
	{
		require("connection_connect.php");
		$sql = "select * from Staff,Position where (SID like'%$key%' or FName like '%$key%' or
		LName like '%$key%') and Staff.posId = Position.posId ORDER BY SID ASC";
		$result=mysql_query($sql) or die(mysql_error());
		while ($my_row = mysql_fetch_array($result)) {
			$id= $my_row[SID];
			$name = $my_row[FName];
			$lname = $my_row[LName];
			$posID = $my_row[posId];
			$posName = $my_row[posName];
			$staffList[]= new Staff($id,$name,$lname,$posID,$posName);
		}
		require("connection_close.php");
		return $staffList;
	}
	public static function add($id,$name,$lname,$posID)
	{ 
		require("connection_connect.php");
		$sql = "insert into Staff (SID,FName,LName,posId) values ('$id','$name','$lname','$posID')";
		$result=mysql_query($sql);// or die(mysql_error());
		require("connection_close.php");
		return "add success $result rows";
	}
	public static function update($id,$name,$lname,$posID)
	{ 
		echo"Entered to upadte()";
		require("connection_connect.php");
		$sql = "UPDATE Staff SET FName = '$name', LName = '$lname' , posId = '$posID' WHERE SID
		= '$id' ";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		return "update success $result row";
	}
	public static function delete($id)
	{ 
		require_once("connection_connect.php");
		$sql = "Delete from Staff Where SID = '$id'";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		return "delete success $result row";
	}
}

?>