<?php
function call($controller,$action)
{		
	require_once("controllers/".$controller."_controller.php"); 
		switch($controller){
				case "pages": 
					$controller = new pagesController();
					break;
				case "report": 
					require_once("models/billModel.php");
					require_once("models/paymentModel.php");
					require_once("models/currentModel.php");		
					require_once("models/historyModel.php");
					require_once("models/promotionModel.php");	
					require_once("models/addNumberModel.php");
					//require_once("models/balanceModel.php");
					$controller = new reportController();
					break;
				case "staff":
					require_once("models/staffModel.php");
					require_once("models/positionModel.php"); 
					$controller = new staffController();
					break;
				case "promotion":
				   require_once("models/promotionModel.php");
				   $controller = new promotionController();
				}
	$controller->{$action}();
}
if ( ( ($controller == "pages") && ($action =="home")) ||(($controller == "pages") && ($action =="error"))
||(($controller == "report") && ($action =="addNumber"))
||(($controller == "report") && ($action =="balance"))
||(($controller == "report") && ($action =="bill_search"))
||(($controller == "report") && ($action =="billing")) || (($controller == "report") && ($action =="bill_detail"))
|| (($controller == "report") && ($action =="payment")) || (($controller == "report") && ($action =="bill_payment"))
|| (($controller == "report") && ($action =="current")) || (($controller == "report") && ($action =="current_detail"))
|| (($controller == "report") && ($action =="history")) || (($controller == "report") && ($action =="history_detail"))|| (($controller == "report") && ($action =="promotion"))|| (($controller == "report") && ($action =="addNumber"))|| (($controller == "report") && ($action =="NewNumber"))|| (($controller == "staff") && ($action =="index"))|| (($controller == "staff") && ($action =="newStaff")) || (($controller == "staff") && ($action =="addStaff")) || (($controller == "staff") && ($action =="search")) || (($controller == "staff") && ($action =="updateForm")) || (($controller == "staff") && ($action =="update")) || (($controller == "staff") && ($action =="deleteConfirm"))|| (($controller == "staff") && ($action =="delete")))
      {call($controller,$action);}
else{call('pages','error');}
?>