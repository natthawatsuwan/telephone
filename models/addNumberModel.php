<?php
class AddN{
public $IDNumber;
public $CID;
public $PID;
public $Date;
 
public function __construct($IDNumber,$CID,$PID)
{
    $this->IDNumber = $IDNumber;
    $this->CID = $CID;
    $this->PID = $PID;
    $this->Date = Date;
}
 
public static function getAll()
{
    require("connection_connect.php");
    $sql = "SELECT * FROM Number";
    $result=mysql_query($sql) or die(mysql_error());
    while ($my_row = mysql_fetch_array($result))    
    {           
        $IDNumber= $my_row[IDNumber];          
        $CID = $my_row[CID];    
         $PID = $my_row[PID];  
        $AddNList[]= new AddN($IDNumber,$CID,$PID);
    }
	
    require("connection_close.php");
    return $AddNList;
}
public static function Add($IDNumber,$CID,$ID)
	{ 
		echo $IDNumber;
		echo"<br>";
		echo $CID;
		echo"<br>";
		echo $PID;
		require("connection_connect.php");
		$sql = "INSERT INTO Number(IDNumber ,NumStart ,CID,PID) values ('$IDNumber',CURDATE(),'$CID','$ID')";
		echo $IDNumber;
		echo"<br>";
		echo $CID;
		echo $PID;
		/*echo("<br>");
		echo($IDNumber);
		echo($CID);
		echo($PID);
		$result=mysql_query($sql);// or die(mysql_error());
		require("connection_close.php");
		return "add success $result rows";*/
		  $result=mysql_query($sql) or die(mysql_error());
    while ($my_row = mysql_fetch_array($result))    
    {           
        $IDNumber= $my_row[IDNumber];          
        $CID = $my_row[CID];    
         $PID = $my_row[PID];  
        $AddNList[]= new AddN($IDNumber,$CID,$PID);
    }
	}
}
