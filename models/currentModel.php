<?php
class Current
{
	
	public $IDNumber; 
 	public $CusName; 
 	public $Promotion;
 	public $DateOpen;
 	public $total;

  public $Paid;
 	public		$sum;
 	public		$FName;
 	public		$LName;
 	public $Total;

 	public function __construct($IDNumber,$CusName,$Promotion,$DateOpen,$total,$Paid,$FName,$LName,$Total)
 	{  
 		$this->IDNumber = $IDNumber;  
 		$this->CusName = $CusName; 
 		$this->Promotion = $Promotion; 
 		$this->DateOpen = $DateOpen;   
 		$this->total = $total;
 		
 		$this->Paid=$Paid;
 	$this->FName=$FName;
 	$this->LName=$LName;
 	$this->Total=$Total;
 		
	}
	
	public static function get()
	{
		require("connection_connect.php");
		$sql = "
						SELECT IDNumber, CusName, PromotionName, DateOpen, (
VAT + sum
) AS total
FROM Payment AS P, customer AS C, Useds AS U,Promotion As PR
WHERE P.Paid !=0000 -00 -00
AND U.PhoneNo = P.IDNumber AND U.CloseDate='0000-00-00'
GROUP BY IDNumber
LIMIT 0 , 30";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		while ($my_row = mysql_fetch_array($result)) {
			$IDNumber = $my_row[IDNumber];  
 			$CusName = $my_row[CusName]; 
 			$Promotion = $my_row[PromotionName];
 			$DateOpen= $my_row[DateOpen];
 			$total=$my_row[total];
			$current[]= new Current($IDNumber,$CusName,$Promotion,$DateOpen,$total);
			}			
		return $current;	
		}
		public static function gets()
	{
		require("connection_connect.php");
		$sql = "
						SELECT IDNumber, CusName, Promotion, DateOpen, (
VAT + sum
) AS total
FROM Payment AS P, customer AS C, Useds AS U,Promotion as p
WHERE P.Paid =0000 -00 -00
AND U.PhoneNo = P.IDNumber
GROUP BY IDNumber
LIMIT 0 , 30";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		while ($my_row = mysql_fetch_array($result)) {
			$IDNumber = $my_row[IDNumber];  
 			$CusName = $my_row[CusName]; 
 			$Promotion = $my_row[Promotion];
 			$DateOpen= $my_row[DateOpen];
 			$total=$my_row[total];
			$current[]= new Current($IDNumber,$CusName,$Promotion,$DateOpen,$total);
			}			
		return $current;	
		}
		public static function current_detail($IDNumber)
	{
		require("connection_connect.php");
		$sql = "SELECT IDNumber, Paid, sum, (
VAT + sum
) AS Total, FName, LName
FROM Useds AS U, Payment AS P, Staff AS S
WHERE S.SID = P.SID
AND P.Paid !=0000 -00 -00
AND P.IDNumber ='$IDNumber'
GROUP BY IDNumber
LIMIT 0 , 30";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		while ($my_row = mysql_fetch_array($result)) {
 			$IDNumber = $my_row[IDNumber]; 
 			$Paid = $my_row[Paid];
 			$sum = $my_row[sum];
 			$Total = $my_row[Total];
 			$FName = $my_row[FName];
 			$LName = $my_row[LName];
			$current[]= new Current($IDNumber,$Paid,$sum,$Total,$FName,$LName);
			}			
		return $current;	
		}
}
?>