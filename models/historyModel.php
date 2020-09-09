<?php
class History
{
	
	public $PhoneNo; 
 	public $CusName; 
 	public $DateOpen; 
 	public $CloseDate;
 	public $sum;
 	public $total;
 	
 	public $Paid;
 	public		$FName;
 	public		$LName;
 	public $Total;
 	public function __construct($PhoneNo,$CusName,$DateOpen,$CloseDate,$sum,$total)
 	{  
 		$this->PhoneNo = $PhoneNo;  
 		$this->CusName = $CusName; 
 		$this->DateOpen = $DateOpen; 
 		$this->CloseDate = $CloseDate;  
 		$this->sum = $sum;   
 		$this->total = $total;
 		
 		$this->Paid = $Paid;
 		$this->FName = $FName;
 		$this->LName = $LName;
 		$this->Total = $Total;
	}
	public static function get()
	{
		require("connection_connect.php");
		$sql = "SELECT PhoneNo, CusName, DateOpen, CloseDate, sum, (
sum + VAT
) AS total
FROM Useds AS U, Number AS N, Payment AS P
WHERE P.IDNumber = U.PhoneNo
AND CloseDate !=0000 -00 -00
GROUP BY CusName
LIMIT 0 , 30";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		while ($my_row = mysql_fetch_array($result)) {
			$PhoneNo = $my_row[PhoneNo];  
 			$CusName = $my_row[CusName]; 
 			$DateOpen = $my_row[DateOpen];
 			$CloseDate= $my_row[CloseDate];
 			$sum= $my_row[sum];
 			$total=$my_row[total];
			$history[]= new History($PhoneNo,$CusName,$DateOpen,$CloseDate,$sum,$total);
			}			
		return $history;	
		}
		public static function history_detail($PhoneNo)
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
 			$PhoneNo = $my_row[PhoneNo]; 
 			$Paid = $my_row[Paid];
 			$sum = $my_row[sum];
 			$Total = $my_row[Total];
 			$FName = $my_row[FName];
 			$LName = $my_row[LName];
			$history[]= new History($PhoneNo,$Paid,$sum,$Total,$FName,$LName);
			}			
		return $history;	
		}
}
?>