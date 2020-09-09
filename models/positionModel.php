<?php
class Position
{
	public $id;
	public $name;
	public function __construct($id,$name)
	{
		$this->id = $id;
		$this->name = $name;
	}
	public static function getAll()
	{
		//$positionList = [];
		require("connection_connect.php");
		$sql = "select * from Position";
		$result=mysql_query($sql) or die(mysql_error());
		while ($my_row = mysql_fetch_array($result))
		{
			$posId= $my_row[posId];
			$posName = $my_row[posName];
			$positionList[]= new Position($posId,$posName);
		}
		require("connection_close.php");
		return $positionList;
	}
}
?>