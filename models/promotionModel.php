<?php
class Promotion
{
	public $PID;
	public $PromotionName;
	public function __construct($ID,$PromotionName)
	{
		$this->ID = $ID;
		$this->PromotionName = $PromotionName;	
	}
	public static function getAll()
	{
		require("connection_connect.php");
		$sql = "select Promotion.PID,Promotion.PromotionName from Promotion";
		$result=mysql_query($sql) or die(mysql_error());
		while ($my_row = mysql_fetch_array($result))
		{
			$PID= $my_row[PID];
			$PromotionName= $my_row[PromotionName];
			$promotionList[]= new Promotion($PID,$PromotionName);
			
		}
		
		require("connection_close.php");
		return $promotionList;
	}
	public static function search($key)
	{
		require("connection_connect.php");
		require("connection_close.php");
		return $promotionList;
	}
}
?>