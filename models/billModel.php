 <?php 
 class Bill
 { 
 	public $PNumber; 
 	public $Name; 
 	public $SName; 
 	public $PromotionName;
	public $Price;
	public $TeleFree; 
 	public $NetFree; 
 	public $sum_call; 
 	public $sum_internet; 
 	public $call_over;
	public $net_over;
	public $TIME;
	public $DATE;
	public $TYPE;
	public $DestNumber;
	public $Amount;

	public $sum;
	public $vat;
	public $total;  
	public $status;
 	public function __construct($PNumber,$Name,$SName,$PromotionName,$Price,$TeleFree,$NetFree,$sum_call,$sum_internet
 	,$call_over,$net_over,$sum,$vat,$total,$status) 
 	{  
 		$this->PNumber = $PNumber;  
 		$this->Name = $Name; 
 		$this->SName = $SName;  
 		$this->PromotionName = $PromotionName;   
		$this->Price= $Price;
		$this->TeleFree = $TeleFree; 
 		$this->NetFree = $NetFree; 
 		$this->sum_call = $sum_call; 
 		$this->sum_internet = $sum_internet; 
 		$this->call_over = $call_over;
		$this->net_over = $net_over;
		$this->DATE=$DATE;
		$this->TIME=$TIME;
		$this->TYPE=$TYPE;
		$this->DestNumber=$DestNumbe;
		$this->Amount=$Amount;

		$this->sum = $sum;
		$this->vat = $vat;
		$this->total = $total;
		$this->status=$status;		
 	} 
public static function search($M,$Y)
	{
		require("connection_connect.php");
		$sql = "SELECT DISTINCT (
H.PNumber
), Name, SName,P.PromotionName,P.Price,TeleFree,NetFree

,( SELECT SUM( HIN.Amount )
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Call'
) as sum_call

, (SELECT SUM( HIN.Amount ) 
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Net'
) AS sum_net

,(SELECT IF( SUM( HIN.Amount )>TeleFree,SUM( HIN.Amount )-TeleFree,0)*OverPrice
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Call'
) AS call_over

,(SELECT round( (IF( SUM( HIN.Amount )>NetFree,SUM( HIN.Amount )-NetFree,0)*NetOver),2)
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Net'
) AS net_over 

FROM  `History` H, Number AS N, customer AS C,Promotion AS P
WHERE MONTH( H.Date ) =  '$M'
AND YEAR( H.Date ) =  '$Y'
AND H.PNumber = N.IDNumber
AND N.CID = C.CID
AND N.PID = P.PID
";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		while ($my_row = mysql_fetch_array($result)) {
			$PNumber = $my_row[PNumber];  
 			$Name = $my_row[Name]; 
 			$SName = $my_row[SName];  
 			$PromotionName = $my_row[PromotionName];   
			$TeleFree = $my_row[TeleFree]; 
			$NetFree = $my_row[NetFree]; 
			$call_over= $my_row[call_over];
			$net_over = $my_row[net_over];
			$Price = $my_row[Price];
			$sum_call = $my_row[sum_call];
			$sum_net = $my_row[sum_net];
			
			
		  
			
			$sum=$Price+$call_over+$net_over;
			$vat=($sum)*0.07;
			$total=$sum+$vat;
			$billList[]= new Bill($PNumber,$Name,$SName,$PromotionName,$TeleFree,$NetFree,$call_over,$net_over,$Price
			,$sum_call,$sum_net,$sum,$vat,$total);
		}
		return $billList;
	}
	public static function bill_detail($PNumber)
	{
		require("connection_connect.php");
		$sql = "SELECT PNumber, DATE, TIME, 
TYPE , DestNumber, Amount
FROM History
WHERE PNumber =  '$PNumber'";  //fixxx
		$result=mysql_query($sql) or die(mysql_error());
		while ($my_row = mysql_fetch_array($result)) {
			$PNumber = $my_row[PNumber];
			$DATE = $my_row[DATE];  
			$TIME = $my_row[TIME]; 
			$TYPE = $my_row[TYPE]; 
			$DestNumber = $my_row[DestNumber]; 
			$Amount = $my_row[Amount]; 
			$billList[]= new Bill($PNumber,$DATE,$TIME,$TYPE,$DestNumber,$Amount);
		}
		require("connection_close.php");
		return $billList;
	}
	public static function payment($phone,$month,$year)
	{
		require("connection_connect.php");
		$sql = "SELECT DISTINCT (
H.PNumber
), Name, SName,P.PromotionName,P.Price,TeleFree,NetFree

,( SELECT SUM( HIN.Amount )
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Call'
) as sum_call

, (SELECT SUM( HIN.Amount ) 
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Net'
) AS sum_net

,(SELECT IF( SUM( HIN.Amount )>TeleFree,SUM( HIN.Amount )-TeleFree,0)*OverPrice
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Call'
) AS call_over

,(SELECT round( (IF( SUM( HIN.Amount )>NetFree,SUM( HIN.Amount )-NetFree,0)*NetOver),2)
FROM History HIN
WHERE MONTH( HIN.Date ) = MONTH( H.Date ) 
AND YEAR( HIN.Date ) = YEAR( H.Date ) 
AND HIN.PNumber = H.PNumber
AND HIN.Type =  'Net'
) AS net_over 

FROM  `History` H, Number AS N, customer AS C,Promotion AS P
AND H.PNumber = N.IDNumber
AND N.CID = C.CID
AND N.PID = P.PID";
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		while ($my_row = mysql_fetch_array($result)) {
			$PNumber = $my_row[PNumber];  
 			$Name = $my_row[Name]; 
 			$SName = $my_row[SName];  
 			$PromotionName = $my_row[PromotionName];   
			$TeleFree = $my_row[TeleFree]; 
			$NetFree = $my_row[NetFree]; 
			$call_over= $my_row[call_over];
			$net_over = $my_row[net_over];
			$Price = $my_row[Price];
			$sum_call = $my_row[sum_call];
			$sum_net = $my_row[sum_net];
			
			
		$sum=$Price+$call_over+$net_over;
			$vat=($sum)*0.07;
			$total=$sum+$vat;
			$billList[]= new Bill($PNumber,$Name,$SName,$PromotionName,$TeleFree,$NetFree,$call_over,$net_over,$Price
			,$sum_call,$sum_net,$sum,$vat,$total);
		}
		return $billList;
	}
}

?>