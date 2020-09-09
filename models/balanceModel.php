 <?php 
 class Bala
 {
 	public $IDNumber; 
	public function __construct($IDNumber) 
 	{
 		$this->IDNumber = $IDNumber;  
 	}
public static function balance($IDNumber)
	{ 
		
		require("connection_connect.php");
		$sql = "
		DELETE FROM Payment
    WHERE IDNumber = '$IDNumber';
		
		";
		
		$result=mysql_query($sql) or die(mysql_error());
		require("connection_close.php");
		$balance_list[]= new Bala($IDNumber);
		}
		return $balance_list;
}
?>